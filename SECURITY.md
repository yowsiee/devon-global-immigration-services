# Security Implementation Guide

This document outlines the security features implemented in the Devon Global Immigration Services website.

## Authentication Security

### Password Hashing
- **Implementation**: All passwords are hashed using PHP's `password_hash()` function with `PASSWORD_BCRYPT` algorithm
- **Cost Factor**: Set to 10 (recommended balance between security and performance)
- **Storage**: Password hashes are stored in `application/data/users.json`
- **Verification**: Passwords are verified using `password_verify()` function

**Default Admin Credentials:**
- Email: `admin@dgis.com`
- Password: `admin123`

**⚠️ IMPORTANT**: Change the default password immediately after first login in production!

### Rate Limiting
- **Maximum Attempts**: 5 failed login attempts
- **Lockout Duration**: 15 minutes (900 seconds)
- **Implementation**: 
  - Tracks failed attempts per email address
  - Locks account after maximum attempts exceeded
  - Resets lockout after time period expires
  - Clears rate limit data on successful login

### Session Security

#### Session Regeneration
- **On Login**: Session ID is regenerated using `session_regenerate_id(true)` to prevent session fixation attacks
- **On Logout**: Session ID is regenerated before destroying session
- **Periodic Regeneration**: Session ID regenerates every 30 minutes during active sessions

#### Session Configuration
- **HttpOnly**: Enabled (prevents JavaScript access to session cookies)
- **Secure**: Enabled when HTTPS is detected
- **SameSite**: Set to 'Strict' (prevents CSRF attacks)
- **Use Only Cookies**: Enabled
- **Strict Mode**: Enabled (prevents uninitialized session ID acceptance)
- **Timeout**: 30 minutes (1800 seconds)

## Content Security Policy (CSP)

CSP headers are configured in `public/.htaccess` to prevent XSS attacks and unauthorized resource loading.

**Current Policy:**
- `default-src 'self'`: Only allow resources from same origin
- `script-src`: Allows scripts from self, inline scripts (required for some functionality), and Google Fonts
- `style-src`: Allows styles from self, inline styles, and Google Fonts
- `font-src`: Allows fonts from self, Google Fonts, and data URIs
- `img-src`: Allows images from self, data URIs, HTTPS sources, and blob URIs
- `connect-src 'self'`: Only allows AJAX requests to same origin
- `frame-ancestors 'self'`: Prevents site from being embedded in iframes
- `object-src 'none'`: Prevents loading of plugins
- `upgrade-insecure-requests`: Upgrades HTTP requests to HTTPS

**Note**: The current CSP includes `'unsafe-inline'` and `'unsafe-eval'` for JavaScript compatibility. In production, consider:
- Using nonces for inline scripts
- Using hashes for specific inline scripts
- Removing `'unsafe-eval'` if not needed

## Additional Security Headers

- **X-Content-Type-Options**: `nosniff` - Prevents MIME type sniffing
- **X-Frame-Options**: `SAMEORIGIN` - Prevents clickjacking
- **X-XSS-Protection**: `1; mode=block` - Enables XSS filter
- **Referrer-Policy**: `strict-origin-when-cross-origin` - Controls referrer information
- **Permissions-Policy**: Restricts geolocation, microphone, and camera access

## User Management

### Adding New Users

To add a new user, edit `application/data/users.json`:

```json
{
    "id": 2,
    "email": "user@example.com",
    "password_hash": "[GENERATED_HASH]",
    "name": "User Name",
    "role": "admin",
    "created_at": "2024-01-01 00:00:00",
    "last_login": null,
    "failed_attempts": 0,
    "locked_until": null
}
```

### Generating Password Hashes

Use the password helper or PHP CLI:

**Using PHP CLI:**
```bash
php -r "echo password_hash('your_password', PASSWORD_BCRYPT, ['cost' => 10]);"
```

**Using Helper Function:**
```php
require_once 'application/helpers/password_helper.php';
$hash = hash_password('your_password');
```

## Security Best Practices

1. **Change Default Password**: Immediately change the default admin password
2. **Use Strong Passwords**: Enforce strong password policies
3. **Regular Updates**: Keep PHP and server software updated
4. **HTTPS**: Always use HTTPS in production
5. **Backup**: Regularly backup `application/data/users.json`
6. **Monitor**: Review failed login attempts regularly
7. **CSP Refinement**: Consider tightening CSP policy in production
8. **Session Management**: Implement session timeout warnings for users

## File Permissions

Ensure proper file permissions:
- `application/data/users.json`: 600 (read/write for owner only)
- `application/data/`: 700 (execute for owner only)

## Testing Security Features

1. **Password Hashing**: Verify login works with hashed password
2. **Rate Limiting**: Attempt 6 failed logins to test lockout
3. **Session Regeneration**: Check session ID changes after login
4. **CSP**: Verify site functionality with CSP enabled
5. **Account Lockout**: Test that locked accounts cannot login

## Troubleshooting

### Login Issues
- Verify password hash is correct in `users.json`
- Check file permissions on `users.json`
- Clear browser cookies and try again
- Check if account is locked (wait 15 minutes or reset in JSON file)

### CSP Issues
- Check browser console for CSP violations
- Temporarily relax CSP policy to identify issues
- Use CSP reporting endpoint (if configured) to monitor violations

### Session Issues
- Verify session directory is writable
- Check PHP session configuration
- Ensure cookies are enabled in browser

