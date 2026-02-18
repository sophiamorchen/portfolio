# 🌿 GaSo&Co — PHP Development Version

## Status

⚠️ This project is currently under active development and refactoring.

This repository contains the server-side version of the official GaSo&Co website, built with PHP and intended for deployment on a PHP-enabled hosting environment.

A separate static version was created for GitHub Pages deployment:
<https://sophiamorchen.github.io/gaso-co/>

The development of the static version helped identify structural improvements and architectural refinements that are currently being applied to this PHP version.

---

## Project Overview

GaSo&Co is a sole proprietorship specializing in:

- Equipment rental (garden & construction tools)
- Green space maintenance
- Small home improvement services

This project represents the production-oriented version of the business website.

---

## Technical Stack

- PHP (modular includes)
- HTML5
- CSS (currently standard CSS, SCSS integration planned)
- PDO (database abstraction layer)
- Local file uploads handling
- Structured folder architecture

---

## Current Architecture
/
├── index.php
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ ├── page_service_bricolage_partial.php
│ └── page_services_garden_partial.php
│
├── lib/
│ ├── config.php
│ ├── pdo.php
│ ├── services.php
│ ├── locations.php
│ └── images.php
│
├── pages/
│ ├── services.php
│ ├── locations.php
│ ├── devis.php
│ ├── contact.php
│ ├── blog.php
│ ├── mentions-legales.php
│ ├── politique-confidentialite.php
│ └── cgv.php
│
├── uploads/
├── tables/
└── assets/
├── css/
└── img/

---

## Development Notes

- The project follows a modular structure using reusable includes.
- Business logic is separated into the `/lib` directory.
- PDO is used for database access.
- File uploads are handled via the `/uploads` directory.
- SCSS integration is planned to replace the current flat CSS structure.

---

## Ongoing Improvements

- Refactoring styling architecture (SCSS modularization)
- Layout consistency improvements
- Structural cleanup inspired by the static GitHub Pages version
- Progressive codebase optimization

---

## Deployment Requirements

- PHP 8+
- MySQL / MariaDB
- Apache or Nginx
- Proper file permissions for `/uploads`

---

## Author

Sophia Mörchen  
Full-stack Developer & Entrepreneur
