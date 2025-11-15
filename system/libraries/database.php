<?php 

require_once __DIR__ . '/../core/exceptions.php';
require_once __DIR__ . '/../core/security.php';

class Database {
    
   use session;
    private $host     = HOST;
    private $database = DATABASE;
    private $username = USERNAME;
    private $password = PASSWORD;
    protected $db;
    protected $Query;

    public function __construct(){
      
      try {
        
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8mb4";
      	$this->db = new PDO($dsn, $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      } catch(PDOException $e) {
        throw new DatabaseException("Database Connection Error: " . $e->getMessage());
      }

    }
    
    /**
     * Validate table name to prevent SQL injection
     * 
     * @param string $tableName Table name
     * @throws SecurityException If table name is invalid
     */
    private function validateTableName(string $tableName): void {
        Security::validateIdentifier($tableName);
    }

    /*
        * Query method will receive all the database queries
    */
    public function Query(string $query, array $options = []): bool {

      try {
        $this->Query = $this->db->prepare($query);
        return $this->Query->execute($options);
      } catch(PDOException $e) {
        throw new DatabaseException("Query execution failed: " . $e->getMessage());
      }
    }
    
    /*
        * Count method count the number of rows from the table
    */ 
    public function Count(): int {
      if (!$this->Query) {
        return 0;
      }
      return $this->Query->rowCount();
    }
    

    /*
        * AllCount method count the number of rows from the specified table
    */ 
    public function AllCount(string $table_name): int {
      $this->validateTableName($table_name);
      $this->Query = $this->db->prepare("SELECT * FROM `" . $table_name . "`");
      $this->Query->execute();
      return $this->Query->rowCount();
    }

    public function AllRecords(): array {
      if (!$this->Query) {
        return [];
      }
      return $this->Query->fetchAll(PDO::FETCH_OBJ);
    }

    public function Row() {
      if (!$this->Query) {
        return null;
      }
      return $this->Query->fetch(PDO::FETCH_OBJ);
    }
    
    /*
        * Select method accept only the select query
    */ 
    public function Select(string $table_name, string $options = ""): bool {
      $this->validateTableName($table_name);
      
      if(empty($options)){
        $this->Query = $this->db->prepare("SELECT * FROM `" . $table_name . "`");
        return $this->Query->execute();
      } else {
        // Validate column names in options
        $columns = array_map('trim', explode(',', $options));
        foreach ($columns as $column) {
          Security::validateIdentifier($column);
        }
        $this->Query = $this->db->prepare("SELECT " . $options . " FROM `" . $table_name . "`");
        return $this->Query->execute();
      }
    } 
    
    /*
        * Select_Where method accept the select query along with WHERE statement
    */ 
    public function Select_Where(string $table_name, array $options): bool {
      $this->validateTableName($table_name);
      
      $columns = [];
      $db_values = [];
      
      foreach($options as $key => $value):
        // Validate column name
        Security::validateIdentifier($key);
        $columns[] = "`" . $key . "` = ?";
        $db_values[] = $value;
      endforeach;
      
      $whereClause = implode(" AND ", $columns);
      
      $this->Query = $this->db->prepare("SELECT * FROM `" . $table_name . "` WHERE " . $whereClause);
      return $this->Query->execute($db_values);
    }

    /*
         * Delete Method
    */ 

    public function Delete(string $table_name, array $options): bool {
      $this->validateTableName($table_name);
      
      $columns = [];
      $db_values = [];
      
      foreach($options as $key => $value):
        // Validate column name
        Security::validateIdentifier($key);
        $columns[] = "`" . $key . "` = ?";
        $db_values[] = $value;
      endforeach;
      
      $whereClause = implode(" AND ", $columns);
      
      $this->Query = $this->db->prepare("DELETE FROM `" . $table_name . "` WHERE " . $whereClause);
      return $this->Query->execute($db_values);
    }

    /*
         * Update Method
    */ 

    public function Update(string $table_name, array $set_array, array $options): bool {
      $this->validateTableName($table_name);
      
      $set_columns = [];
      $set_values = [];
      
      foreach($set_array as $key => $value):
        // Validate column name
        Security::validateIdentifier($key);
        $set_columns[] = "`" . $key . "` = ?";
        $set_values[] = $value;
      endforeach;
      
      $where_columns = [];
      $where_values = [];
      
      foreach($options as $key => $value):
        // Validate column name
        Security::validateIdentifier($key);
        $where_columns[] = "`" . $key . "` = ?";
        $where_values[] = $value;
      endforeach;
      
      $setClause = implode(", ", $set_columns);
      $whereClause = implode(" AND ", $where_columns);
      
      // Combine values: set values first, then where values
      $allValues = array_merge($set_values, $where_values);
      
      $this->Query = $this->db->prepare("UPDATE `" . $table_name . "` SET " . $setClause . " WHERE " . $whereClause);
      return $this->Query->execute($allValues);
    }

    /*
        * Insert Method
    */ 

    public function Insert(string $table_name, array $columns_values): bool {
      $this->validateTableName($table_name);
      
      $columns = [];
      $placeholders = [];
      $values = [];
      
      foreach($columns_values as $key => $value):
        // Validate column name
        Security::validateIdentifier($key);
        $columns[] = "`" . $key . "`";
        $placeholders[] = "?";
        $values[] = $value;
      endforeach;
      
      $columnsStr = implode(", ", $columns);
      $placeholdersStr = implode(", ", $placeholders);
      
      $this->Query = $this->db->prepare("INSERT INTO `" . $table_name . "` (" . $columnsStr . ") VALUES (" . $placeholdersStr . ")");
      return $this->Query->execute($values);
    }

    // SELECT * FROM users INNER JOIN teacher ON users.id = teacher.id

    public function Join(string $table1, string $table2, string $condition, string $join_name = ""): bool {
      $this->validateTableName($table1);
      $this->validateTableName($table2);
      
      // Validate join type
      $validJoins = ['', 'LEFT JOIN', 'RIGHT JOIN', 'INNER JOIN'];
      if (!in_array($join_name, $validJoins)) {
        throw new DatabaseException("Invalid join type: {$join_name}");
      }
      
      // Note: Condition validation is complex, so we rely on prepared statements for values
      // But table names are already validated above
      
      if(empty($join_name)) {
         $this->Query = $this->db->prepare("SELECT * FROM `" . $table1 . "` INNER JOIN `" . $table2 . "` ON " . $condition);
         return $this->Query->execute();
      } else {
         $this->Query = $this->db->prepare("SELECT * FROM `" . $table1 . "` " . $join_name . " `" . $table2 . "` ON " . $condition);
         return $this->Query->execute();
      }
    }




    }


 ?>