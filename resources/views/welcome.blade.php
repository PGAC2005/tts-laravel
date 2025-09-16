<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Text-to-Speech App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Estágio Laravel: Formulário com TTS</h2>

                    <form action="{{ route('speak') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="text" class="form-label">Digite seu texto:</label>
                            <textarea name="text" id="text" class="form-control" rows="3" placeholder="Ex: Olá, mundo!" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
                        </div>
                    </form>

                    @if(isset($text))
                        <div class="mt-4 text-center">
                            <h5>Você digitou:</h5>
                            <p class="fst-italic">"{{ $text }}"</p>
                            <audio autoplay hidden>
                                <source src="{{ $audio }}" type="audio/mpeg">
                                Seu navegador não suporta áudio.
                            </audio>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>