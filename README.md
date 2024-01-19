# README - Aplicación de Gestión de Bodegas de La Rioja Alavesa

## Descripción

Esta aplicación ha sido desarrollada para el Departamento de Turismo de la Diputación Foral de Álava, con el propósito de gestionar información relacionada con las bodegas de La Rioja Alavesa. La aplicación sigue un enfoque Modelo-Vista-Controlador (MVC) y proporciona funcionalidades clave, incluyendo la adición de bodegas, consulta del listado de bodegas, visualización y edición de detalles de bodegas, así como la gestión de vinos asociados a cada bodega.

## Arquitectura MVC

### Vistas:

1. **Ventana Principal (Listado de Bodegas):**
   - Muestra el listado de bodegas disponibles.
   - Botones para añadir una nueva bodega y dar de baja una bodega existente.
   - Botón para entrar en la bodega en específico.

2. **Ventana de Detalles de Bodega:**
   - Muestra detalles de una bodega específica.
   - Lista los vinos ofrecidos por la bodega.
   - Botones para añadir un nuevo vino, editar detalles de la bodega y dar de baja la bodega.
   - Botón para navegar de vuelta a la ventana principal.
   - Ademas se podra ver el vino en específico.

3. **Ventana de Edición de Vino:**
   - Permite la edición de detalles de un vino específico.

### Controladores:

1. **Controlador de Bodegas:**
   - Funciones principales:
     - Listar bodegas disponibles.
     - Añadir una nueva bodega.
     - Dar de baja una bodega.

2. **Controlador de Detalles de Bodega:**
   - Funciones principales:
     - Mostrar detalles de una bodega.
     - Mostrar lista de vinos de la bodega.
     - Añadir un nuevo vino.
     - Editar detalles de la bodega.
     - Dar de baja la bodega.

3. **Controlador de Edición de Vino:**
   - Funciones principales:
     - Editar detalles de un vino específico.
     - Dar de baja un vino.

### Modelos:

1. **Modelo de Bodegas:**
   - Gestiona la información de las bodegas.
   - Funciones principales:
     - Añadir una nueva bodega.
     - Eliminar una bodega.
     - Obtener detalles de una bodega.
     - Listar todas las bodegas.

2. **Modelo de Vinos:**
   - Gestiona la información de los vinos.
   - Funciones principales:
     - Añadir un nuevo vino.
     - Editar detalles de un vino.
     - Eliminar un vino.
     - Obtener detalles de un vino.

### Observaciones:
- Cada vista se comunica con su respectivo controlador.
- Los controladores interactúan con los modelos para realizar operaciones en los datos.
- Los modelos gestionan y almacenan la información de las bodegas y vinos.
- El flujo de datos sigue el patrón MVC para mantener una estructura clara y modular.

### BBDD:
   CREATE DATABASE IF NOT EXISTS `bodegas`;
