<!-- resources/views/contacto.blade.php -->
<form action="{{ route('contacto.store') }}" method="post">
    @csrf
    <input type="text" name="nombre_completo" placeholder="Nombre completo">
    <input type="email" name="correo" placeholder="Correo electrónico">
    <input type="tel" name="telefono" placeholder="Teléfono">
    <input type="text" name="direccion" placeholder="Dirección">
    <input type="text" name="servicio_solicitado" placeholder="Servicio solicitado">
    <textarea name="comentarios" placeholder="Comentarios"></textarea>
    <button type="submit">Enviar</button>
</form>
