# INSERTAR NUEVOS REGISTROS #
# INSERT CON TODOS LOS CAMPOS #
INSERT INTO usuarios VALUES(null, 'Mario', 'Robles', 'mario@robles.com', '1234', '2018-05-01');
INSERT INTO usuarios VALUES(null, 'Zaza', 'Caycho', 'zaza@caycho.com', '1234', '2018-04-05');
INSERT INTO usuarios VALUES(null, 'Vasco', 'Robles', 'vasco@robles.com', '1234', '2018-07-29');

# INSERT CON ALGUNOS CAMPOS #
INSERT INTO usuarios(email, password) VALUES('mario@robles.com', '1234');