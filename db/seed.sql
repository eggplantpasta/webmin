insert into users
(username, password, email, admin)
values
('admin', '$2y$10$1fxpfSa8iTzhSQI8enCkBudjSFJvtoKCcLz6HAH2sG0nUGA4kCivS', 'admin@nowhere.com', 1), -- secret
('scott', '$2y$10$.wUFeZXL8t8GQhw3NhMCouL1mVGaS5KP80Ku.xkEHSCxgjn6huFcO', 'joe@nowhere.com', 0); -- tiger