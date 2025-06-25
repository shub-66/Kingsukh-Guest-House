# Kingsukh Guest House 🌄🏨

A beautifully designed multi-page responsive website for Kingsukh Guest House located near Baranti Hills, West Bengal. Built using HTML, CSS, JavaScript, and PHP. The site includes sections like Rooms, Gallery, Services, Contact Form, and Google Map integration.

## 🔧 Tech Stack

- 🖼️ HTML5
- 🎨 CSS
- 💡 JavaScript (Vanilla)
- 🐘 PHP (Form submission & database connection)
- 💾 MySQL (Contact form storage)
- 📨 Formspree (optional for form submission without backend)

## 📂 Features

- Fully responsive UI for all devices
- Booking call-to-action buttons
- Rooms with pricing
- Interactive gallery section
- Contact form with backend submission
- Google Maps location embed
- WhatsApp integration for quick bookings

## 📍 How to Run Locally

1. Clone the repository:
git clone https://github.com/shub-66/Kingsukh-Guest-House.git

sql
Copy
Edit
2. Run using [XAMPP](https://www.apachefriends.org/):
- Start Apache and MySQL
- Place the folder in `htdocs`
- Access via: `http://localhost/guesthouse/`

3. Create a database:
```sql
CREATE DATABASE guesthouse;

USE guesthouse;

CREATE TABLE contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100),
  last_name VARCHAR(100),
  email VARCHAR(100),
  mobile VARCHAR(15),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
📬 Contact Form Setup
If using MySQL + PHP: configure your DB credentials in submit_contact.php.

If using Formspree: Replace <form action="submit_contact.php" with your Formspree form endpoint.

📸 Live Preview
netlify deploy link - https://stately-granita-dd2b64.netlify.app/

💡 Author
Shubham Kumar
