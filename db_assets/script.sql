CREATE DATABASE IF NOT EXISTS recruitment_app;

use recruitment_app;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY NOT NULL,
    role_id INT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255) NOT NULL,
    profile_picture VARCHAR(255),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE IF NOT EXISTS jobs (
    id INT PRIMARY KEY NOT NULL,
    author_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    job_description TEXT NOT NULL,
    number_of_positions INT NOT NULL, DEFAULT 0
    Application_deadline DATE,
    status INT NOT NULL DEFAULT 1,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS applicants (
    id INT PRIMARY KEY NOT NULL,
    user_id INT NOT NULL,
    job_id INT NOT NULL,
    status INT DEFAULT 0,
    resume VARCHAR(255) NOT NULL,
    cover_letter TEXT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (job_id) REFERENCES jobs(id)
);

CREATE TABLE IF NOT EXISTS interviews (
    id INT PRIMARY KEY NOT NULL,
    job_id INT NOT NULL,
    application_id INT NOT NULL,
    interviewer_id INT,
    interview_date DATETIME,
    status INT DEFAULT 1,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (application_id) REFERENCES applicants(id),
    FOREIGN KEY (interviewer_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS employees (
    id INT PRIMARY KEY NOT NULL,
    user_id INT,
    position VARCHAR(255),
    end_date DATE,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS roles (
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP
);
