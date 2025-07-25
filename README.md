# Robot Arm Control Panel 

A clean, interactive web-based interface to control and store multiple servo motor poses for a robotic arm.

Built using:

* HTML, CSS, JavaScript for the frontend
* PHP & MySQL for backend and database handling

---

## Features

* Control 6 motor angles with sliders (0–180°)
* Save current servo configuration to database
* Display all saved poses in a sortable table
* Load a pose to set it as the current active pose
* Delete a pose from the database
* `get_run_pose.php`: provides current pose as JSON for microcontrollers
* `update_status.php`: resets pose state after robot finishes movement

---

## Interface Preview

![Robot Arm Control Panel](Robot%20Arm%20Control%20Panel.png)

---



## How to Run (Localhost)
1. Install XAMPP

2. Place the folder in htdocs/

3. Start Apache and MySQL via XAMPP Control Panel

4. Create robot_db in phpMyAdmin and run the SQL from above

5. Visit: http://localhost/robot_arm_control_panel

## Future Ideas
- Add user authentication

- Visual servo animation preview

- ESP32 auto-sync via periodic polling

- Export/import pose sets as JSON

