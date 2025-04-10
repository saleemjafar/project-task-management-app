# project-task-management-app
A simple and efficient task management system built with Laravel and Javascript (Tailwind CSS for styling), allowing users to manage projects, tasks, and their priorities with drag-and-drop functionality.

**Features**

*Project Management*

Create, update, and delete projects.

View and manage tasks for each project.




*Task Management*

Create, update, and delete tasks within a project.

Drag-and-drop functionality to reorder tasks based on priority.



*Priority Management*

Tasks are ordered by priority.

Rearrange task priorities dynamically using drag-and-drop.





**Requirements**

PHP >= 8.x

Laravel >= 12.x

Node.js >= 16.x (for compiling assets with Vite)
MySQL/MariaDB (for database management)


**Installation**

Follow these steps to set up the project on your local machine.



**1. Clone the Repository**

git clone https://github.com/saleemjafar/project-task-management-app.git

cd project-task-management-app


**2. Install PHP dependencies**

Make sure you have Composer installed, then run:
<code> composer install </code>



**3. Install Node.js dependencies**

Make sure you have Node.js and npm installed, then run:
<code> npm install </code>



**4. Configure Environment**
Copy the .env.example file to .env:

<code> cp .env.example .env </code>



Configure your database credentials and other environment settings in the .env file.

**5. Generate Application Key**

<code> php artisan key:generate </code>


**6. Run Migrations**

<code>php artisan migrate</code>



If you need some seed data for testing, you can run:

<code> php artisan db:seed </code>



**7. Compile Assets**

Compile your CSS and JavaScript files with Vite:


<code> npm run dev </code>


**8. Serve the Application**

Now you can start your Laravel application:

<code> php artisan serve </code>

Visit your app at http://localhost:8000.


****Usage****

**Create a Project**

Go to the homepage and enter the project name in the input box.

Click the Add Project button to create a new project.


Add Tasks to a Project

For each project, you can create tasks by typing a task name and clicking Add Task.


You can also update the task name or delete tasks.


Reorder Tasks

The tasks within each project can be reordered via drag-and-drop.


After dragging a task to a new position, the task's priority is automatically updated.

