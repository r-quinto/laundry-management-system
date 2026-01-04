# laundry-management-system
The Laundry Management System is a web-based system developed to manage the daily operations of Spin Mode Laundry. The system is designed to run on a local server and helps streamline order processing, user management, income and expense tracking, and report generation.

Features:
- User account management (add, delete, and log user actions)
- User authentication and session management
- Order and receipt tracking
- Dashboard for:
  * Recent orders
  * Unpaid orders
  * Unclaimed orders
- Income tracking (daily, monthly, yearly, and custom range)
- Expense tracking
- Sales and order reports
- Data visualization using charts

# Project Structure
User Management
- accounts.php
- add_account.php
- delete_account.php

Orders & Receipts
- orders.php
- insertOrders.php
- receipt.php

Dashboards
- dashboardRecent.php
- dashboardUnpaid.php
- dashboardUnclaimed.php

Income Reports
- incomeDay.php
- incomeAll.php
- incomeYear.php
- incomerange.php

Expenses
- expensesPart.php

Main Pages
mainpage.php – Main landing page
login.php
login.html
logout.php

Other
- chartss.js – Charts and data visualization
- spinmode_laundry.sql – Database structure

# How to Run
1. Clone or download the repository.
2. Place the project folder inside your web server’s root directory.
3. Set up the database using your preferred SQL database system.
4. Start your web server and database services.
5. Open a web browser and navigate to the project directory via localhost.

