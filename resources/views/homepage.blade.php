<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista treni in partenza:</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <h2> Azienda:{{ $train->Azienda }}</h2>
                <p>Stazione di partenza: {{ $train->Stazione_di_partenza }}</p>
                <p>Stazione di arrivo {{ $train->Stazione_di_arrivo }}</p>
                <h4>Codice treno: {{ $train->Codice_Treno }}</h4>
                <p>Classe: {{ $train->Classe }}</p>
                <p>Orario di partenza: {{ $train->Orario_di_partenza }}</p>
                <p>Orario di arrivo: {{ $train->Orario_di_arrivo }}</p>
                <p>N. Carrozze: {{ $train->Numero_Carrozze }}</p>
                <p>
                    In Orario: 
                    @if ($train->In_orario) 
                        <span>Si</span>
                    @else 
                        <span>No</span>
                    @endif
                </p>
                <p>
                    Cancellato: 
                    @if ($train->Cancellato) 
                        <span>Si</span>
                    @else 
                        <span>No</span>
                    @endif
                </p>

            </li>
        @endforeach
    </ul>
</body>
</html>