<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #000;
        }
        .form-title {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
        }
        .field-value {
            border-bottom: 1px solid #ccc;
            padding: 4px 0;
        }
    </style>
</head>
<body>

    <div class="form-title">{{ $title }}</div>

    @foreach($fields as $key => $value)
        <div class="field">
            <div class="field-label">{{ ucfirst(str_replace('_', ' ', $key)) }}:</div>
            <div class="field-value">
                {{ $value ?: '—' }}
            </div>
        </div>
    @endforeach

</body>
</html>
