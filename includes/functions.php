<?php
/**
 * Render a template with the app layout
 * 
 * @param string $template Template file name (without .php extension)
 * @param array $data Data to pass to the template
 * @param string $pageTitle Page title
 * @param string $additionalHead Additional head content
 * @param string $additionalScripts Additional scripts
 */
function renderTemplate($template, $data = [], $pageTitle = null, $additionalHead = '', $additionalScripts = '') {
    // Extract data variables
    extract($data);
    
    // Start output buffering to capture template content
    ob_start();
    include "templates/{$template}.php";
    $content = ob_get_clean();
    
    // Include the layout
    include 'templates/layout.php';
}

/**
 * Escape HTML output
 * 
 * @param string $string String to escape
 * @return string Escaped string
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get current page name
 * 
 * @return string Current page name
 */
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

/**
 * Check if current page is active
 * 
 * @param string $page Page name to check
 * @return string 'active' if current page, empty string otherwise
 */
function isActivePage($page) {
    return getCurrentPage() === $page ? 'active' : '';
}
?> 