# Tawazun Psychiatric Clinic

A comprehensive web application for Tawazun Psychiatric Clinic, built with Laravel framework. This system allows patients to book appointments, manage their profiles, and access clinic information, while providing an intuitive interface for clinic management.

## Features

### For Patients
- **User Registration & Authentication**: Secure login and registration system
- **Appointment Booking**: Easy online appointment scheduling with doctor selection
- **Patient Dashboard**: View upcoming and past appointments, appointment statistics
- **Profile Management**: Update personal information and manage account settings
- **Appointment Management**: View and manage all booked appointments

### Clinic Information
- **Home Page**: Welcome page with clinic overview and hero section
- **About Us**: Detailed information about the clinic and its mission
- **Our Doctors**: Profiles of experienced psychiatrists:
  - Dr. Mohammed Alyafay - Geriatric Psychiatry
  - Dr. Baha Goul - Adolescent Psychiatry
  - Dr. Ahmad Lolo - Child Psychiatry
  - Dr. Baseel Mohammed - Eating Disorders
- **Testimonials**: Patient reviews and feedback
- **Contact Information**: Clinic address, phone, and email

### Technical Features
- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Secure Authentication**: Laravel Breeze for authentication
- **Database Management**: Eloquent ORM with MySQL
- **Form Validation**: Comprehensive input validation
- **Session Management**: Secure session handling
- **Email Integration**: Ready for email notifications

## Technology Stack

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates, Bootstrap 5, Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **JavaScript**: jQuery, Bootstrap JS
- **Styling**: Custom CSS, Font Awesome icons

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/TopTechSoftwareSolutions/Abhubakkar.git
   cd abhubakkar
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   - Create a MySQL database
   - Update `.env` file with database credentials
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build Assets**
   ```bash
   npm run build
   ```

7. **Start the Application**
   ```bash
   php artisan serve
   ```

## Usage

### For New Patients
1. Visit the homepage and explore clinic information
2. Register for an account
3. Book an appointment by selecting date, time, and doctor
4. View appointments in the dashboard

### For Existing Patients
1. Login to your account
2. Access dashboard to view appointment statistics
3. Manage appointments and profile information

## Database Schema

### Users Table
- Standard Laravel users table with authentication fields

### Appointments Table
- patientName: string
- email: string
- date: date
- time: string
- selectedDoctor: string
- timestamps

### Articles Table (Optional)
- For clinic blog/news features

## Security Features

- CSRF protection on all forms
- Input validation and sanitization
- Secure password hashing
- Session security
- SQL injection prevention through Eloquent ORM

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Contact

**Tawazun Clinic**
- Address: Ahmed Mokhtar Hegazy, Eastern El-Manial, Cairo Governorate
- Phone: +201551944093
- Email: info@tawazunclinic.com

## Acknowledgments

- Laravel Framework
- Bootstrap
- Font Awesome
- All the doctors and staff at Tawazun Clinic
