const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 3000;

app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.use(express.static('public'));
app.post('/registro', (req, res) => {
  const { numero_identificacion, nombres_apellidos, fecha_nacimiento, genero, correo_electronico } = req.body;

  if (!numero_identificacion || !nombres_apellidos || !fecha_nacimiento || !genero || !correo_electronico) {
    return res.status(400).json({ mensaje: 'Faltan datos obligatorios' });
  }

  // Simulación de guardado correcto
  res.status(200).json({ mensaje: 'Registro exitoso' });
});

app.listen(PORT, () => {
  console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
