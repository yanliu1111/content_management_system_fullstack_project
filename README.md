# Content Management System fullstack project

<div align="center">
<img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Smilies/Face%20Blowing%20a%20Kiss.png" alt="Face Blowing a Kiss" width="120" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Smilies/Face%20with%20Peeking%20Eye.png" alt="Face with Peeking Eye" width="120" />
</div>

## 1. Project Description

- Authentication
- Learn to use jQuery + Bootstrap
- RealTime Notifications with JS
- Protect your credentials with .ENV
- Learn Composer (PHP dependency Manager)
- Learn to send emails - from PHP or using a third party Package

## 2. Technologies include

- PHP
- Composer
- MySQL
- Bootstrap
- jQuery

## 3. Working Notes

### 3.1. `<?php ob_start() ?>`

- `ob_start()` turns on output buffering. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.
- When we request a page from the server, server send some information regarding the page in the header, when we try to use header("Location: somepage.php"), without ob_start() server had already send the information, so this will result in error during redirect. to avoid this it is recommended to use ob_start() as the first thing in the page before any white space or any type of spaces, and in the end of the page ob_end_flush() so that all the given information will be stored into the buffer and when redirecting the page, it is redirected without error.....

  <p>
  I am learning, but slowly...
  <img align="right" src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Animals/Turtle.png" alt="Turtle" width="50" height="50" />
  </p>
