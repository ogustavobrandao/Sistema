<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumo das Atividades</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Resumo das Atividades</h2>

    <table id="tableAtividades" style="width: 100%">
        <thead style="background-color: lightgray; border-radius: 15px">
        <tr>
            <th class="align-middle" scope="col">Atividades</th>
            <th class="align-middle" scope="col">Status</th>
        </tr>
        </thead>

        <tbody>
            <?php
            $cinza = '#ddd';
            $branco = '#fff';
            $cor = $branco;
            $ultimaCor = $cor;
            ?>

            @foreach($lista1 as $lista)
                <tr style="background-color:{{ $cor }}" <?php $ultimaCor = $cor?> >
                    <td class="align-middle" scope="col" style="text-align: center">{{ $lista->tarefa }}</td>

                    @if($lista->status == false)
                        <td class="align-middle" scope="col" style="text-align: center">Em andamento</td>
                    @else
                        <td class="align-middle" scope="col" style="text-align: center">Concluído</td>
                    @endif
                </tr>
                @if($ultimaCor == $cinza)
                    <?php $cor = $branco?>
                @elseif($ultimaCor == $branco)
                    <?php $cor = $cinza?>
                @endif
            @endforeach

            @foreach($lista2 as $lista)
                <tr style="background-color:{{ $cor }}" <?php $ultimaCor = $cor?> >
                    <td class="align-middle" scope="col" style="text-align: center">{{ $lista->tarefa }}</td>

                    @if($lista->status == false)
                        <td class="align-middle" scope="col" style="text-align: center">Em andamento</td>
                    @else
                        <td class="align-middle" scope="col" style="text-align: center">Concluído</td>
                    @endif
                </tr>
                @if($ultimaCor == $cinza)
                    <?php $cor = $branco?>
                @elseif($ultimaCor == $branco)
                    <?php $cor = $cinza?>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>