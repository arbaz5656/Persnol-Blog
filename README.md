# Blog Platform with User Authentication

## Overview
This is a blog platform that allows users to create, manage, and publish their own blog posts. Users can sign up, log in, create new posts, edit existing posts, and delete their posts. The platform also displays published blog posts publicly.

## Features
- User authentication (sign up and login)
- User dashboard to manage blog posts
- Create, edit, and delete blog posts
- Rich text editor for formatting content
- Auto-save feature for drafts
- Public display of published blog posts
- Search functionality for blog posts

## Technologies Used
- **Backend:** PHP, MySQL
- **Frontend:** HTML5, CSS3, JavaScript
- **Libraries:** 
  - TinyMCE or Quill (for rich text editing)
  - AJAX (for improved user experience)

## Setup Instructions

### Prerequisites
- XAMPP or any other PHP server
- A web browser

### Installation Steps
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/arbaz5656/blog-platform.git
   cd blog-platform
2. **Set Up Database:**
```bash
Create a MySQL database (e.g., blog_platform).
Import the provided SQL file located in the database folder to create the necessary tables.
Update the db.php file in the config folder with your database credentials.
3. **Start XAMPP:**

Open XAMPP and start the Apache and MySQL services.
4. **Access the Application:**

Open your web browser and go to http://localhost/blog-folder/public/index.php.
5. **Directory Structure**
/blog-folder
    /assets             # Contains CSS and JavaScript files
    /controllers        # PHP scripts for handling requests
    /dashboard          # Dashboard for logged-in users
    /public             # Public-facing files
    /config             # Database configuration
    /views              # User interface for login and signup

