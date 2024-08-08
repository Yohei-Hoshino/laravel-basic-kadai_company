<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel基礎</title>
</head>
<body>
    <h1>タイトル</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="post_title">
                </td>
            </tr>
            <tr>
                <th>本文</th>
                <td>
                    <textarea name="post_content" cols="30" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="登録">
    </form>
</body>
</html>
