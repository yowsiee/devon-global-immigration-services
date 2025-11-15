<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Login'; ?></title>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/dashboard.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>Dev's Domain</h1>
                <p>Admin Dashboard</p>
            </div>
            
            <?php if(isset($error) && $error): ?>
                <div class="alert alert-error">
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo Base_URL; ?>/login/authenticate" method="POST" class="login-form">
                <?php echo Security::csrfField(); ?>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required 
                           placeholder="Enter your email" autocomplete="email">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required 
                           placeholder="Enter your password" autocomplete="current-password">
                </div>
                
                <button type="submit" class="btn btn-login">Sign In</button>
            </form>
            
            <div class="login-footer">
                <p>Default credentials: admin@devsdomain.com / admin123</p>
            </div>
        </div>
    </div>
</body>
</html>

