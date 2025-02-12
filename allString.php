<?php
// Single-quoted string
$single_quote = 'This is a single-quoted string.';

// Double-quoted string
$double_quote = "This is a double-quoted string.";

// Heredoc syntax
$heredoc = <<<EOT
This is a heredoc string.
It supports multiple lines and variable interpolation.
EOT;

// Nowdoc syntax (similar to single quotes, no variable interpolation)
$nowdoc = <<<'EOT'
This is a nowdoc string.
It behaves like a single-quoted string.
EOT;

// Output all strings
echo "Single-quoted: $single_quote\n";
echo "Double-quoted: $double_quote\n";
echo "Heredoc: $heredoc\n";
echo "Nowdoc: $nowdoc\n";
?>
