<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koruptor</title>
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color:skyblue; 
            color:black;
            margin-bottom: 10px;
            border: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.5);

        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: pink;
            color: white;
            margin-bottom: 10px;
            border: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.5);
        }
        input[type="number"]{
            border:none;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><center>KALKULATOR</center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
        @csrf
        <table border=1 width=300>
            <tr>
                <td colspan="2"><input type="number" name="a" id=""></td>

                <td colspan="2" rowspan="2"><input type="reset" value="Reset" name="op"></td>

            </tr>
            <tr>
                <td colspan="2"><input type="number" name="b" id=""></td>

            </tr>
            <tr>
                <td colspan="4">Hasil</td>

            </tr>
            <tr>
                <td><input type="submit" value="+" name=op></td>
                <td><input type="submit" value="-" name=op></td>
                <td><input type="submit" value="/" name=op></td>
                <td><input type="submit" value="x" name=op></td>
            </tr>
            <tr>
                <td colspan="4">
                    Nama:Rahmad Fadil
                    <br>
                    Kelas:XII PPLG 2
                </td>
            </tr>

        </table>
    </form>
    </center>
</body>
</html>
