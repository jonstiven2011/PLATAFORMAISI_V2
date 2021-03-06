<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte en PDF</title>
</head>
<body>
	<table>
        <thead>
            <tr>
                <th> Id </th>
                <th> Nombre Completo </th>
                <th> Documento </th>
                <th> Correo Electrónico </th>
                <th> Telefóno </th>
                <th> Dirección </th>
                <th> Foto </th>
            </tr>
        </thead>
	@foreach($users as $user)
		<tr>
			<td> {{ $user->id }} </td>
			<td> {{ $user->fullname }} </td>
			<td> {{ $user->document }} </td>
			<td> {{ $user->email }} </td>
			<td> {{ $user->phone }} </td>
            <td> {{ $user->address }} </td>
            <td> <img src="{{ public_path() . '/' . $user->photo }}" width="40px"> </td>
		</tr>
	@endforeach
</table>
</body>
</html>