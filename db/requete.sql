USE peersync;
CREATE TABLE users (

    id INT PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(150) UNIQUE NOT NULL,

    password VARCHAR(255) NOT NULL,

    role ENUM('student','tutor') NOT NULL

);
CREATE TABLE skills (

    id INT PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(100) NOT NULL

);
CREATE TABLE user_skills (

    id INT PRIMARY KEY AUTO_INCREMENT,

    user_id INT NOT NULL,

    skill_id INT NOT NULL,

    level ENUM('mastered','learning') NOT NULL,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE,

    FOREIGN KEY (skill_id)
    REFERENCES skills(id)
    ON DELETE CASCADE

);
CREATE TABLE help_requests (

    id INT PRIMARY KEY AUTO_INCREMENT,

    title VARCHAR(255) NOT NULL,

    description TEXT NOT NULL,

    status ENUM('pending','assigned','resolved')
    DEFAULT 'pending',

    technologie VARCHAR(100) NOT NULL,

    student_id INT NOT NULL,

    tutor_id INT NULL,
FOREIGN KEY (student_id)
    REFERENCES users(id)
    ON DELETE CASCADE,

    FOREIGN KEY (tutor_id)
    REFERENCES users(id)
    ON DELETE SET NULL

);
 CREATE TABLE evaluations (

    id INT PRIMARY KEY AUTO_INCREMENT,

    rating INT NOT NULL,

    comment TEXT,

    student_id INT NOT NULL,

    tutor_id INT NOT NULL,

    help_request_id INT NOT NULL,

    FOREIGN KEY (student_id)
    REFERENCES users(id)
    ON DELETE CASCADE,

    FOREIGN KEY (tutor_id)
    REFERENCES users(id)
    ON DELETE CASCADE,

    FOREIGN KEY (help_request_id)
    REFERENCES help_requests(id)
    ON DELETE CASCADE

);
INSERT INTO users(name,email,password,role)
VALUES
('Salwa','salwa@gmail.com','123','student'),
('Khadija','khadija@gmail.com','123','tutor');
INSERT INTO skills(name)
VALUES
('PHP'),
('SQL'),
('JavaScript'),
('POO');
INSERT INTO user_skills(user_id,skill_id,level)
VALUES
(1,1,'learning'),
(1,2,'learning'),
(2,1,'mastered'),
(2,4,'mastered');
INSERT INTO help_requests
(title,description,status,technologie,student_id)
VALUES
(
'Probleme POO',
'Je suis bloque sur l heritage en PHP',
'pending',
'PHP',
1
);

