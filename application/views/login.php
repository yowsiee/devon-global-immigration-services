<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Admin Login - Devon Global Immigration Services'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/dashboard.css">
    <link rel="icon" type="image/png" href="<?php echo Base_URL; ?>/images/logo.png">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <img src="<?php echo Base_URL; ?>/images/logo.png" alt="Devon Global Immigration Services" onerror="this.style.display='none';">
                </div>
                <h1>Admin Login</h1>
                <p>Devon Global Immigration Services</p>
            </div>
            
            <?php if(isset($error) && $error): ?>
                <div class="alert alert-error">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
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
                <a href="<?php echo Base_URL; ?>" class="login-back-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    Back to Website
                </a>
            </div>
        </div>
    </div>
</body>
</html>

