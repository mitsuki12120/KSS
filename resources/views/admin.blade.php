<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K SNACK STORE</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            line-height: 1.25;
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
            padding: 0;
            width: auto;
            table-layout: fixed;
            margin-top:90px;
        }

        table tr {
            background-color: #e6f2f5;
            padding: .35em;
            border-bottom: 2px solid #fff;
        }
        table th,
        table td {
        padding: 1em 10px 1em 1em;
        border-right: 2px solid #fff;
        }
        table th {
            font-size: .85em;
        }
        table thead tr{
            background-color: #167F92;
            color:#fff;
        }
        table tbody th {

            color: #fff;
        }
        .txt{
            text-align: left;
            font-size: .85em;
        }
        .price{
            text-align: right;
            color: #167F92;
            font-weight: bold;
        }
        .non{
            
        }

    h1{
        margin-top: 100px;
        text-align: center;
    }

    #button{
        color: #090909;
        padding: 0.7em 1.7em;
        font-size: 18px;
        border-radius: 0.5em;
        background: #e8e8e8;
        border: 1px solid #e8e8e8;
        transition: all .3s;
        box-shadow: 6px 6px 12px #c5c5c5,
                    -6px -6px 12px #ffffff;
        margin-left:800px;
        text-decoration: none;

    }

    #button:active {
    color: #666;
    box-shadow: inset 4px 4px 12px #c5c5c5,
                inset -4px -4px 12px #ffffff;
    }

    .ww{
        margin-top:300px;
    }
</style>
</head>
<body>
    <h1>ユーザー一覧</h1>
    
    <table>
    
        <thead> 
        
            <tr>
                <th scope="col">id</th>
                <th scope="col">名前</th>
                <th scope="col">フリガナ</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">郵便番号</th>
                <th scope="col">都道府県</th>
                <th scope="col">市町村,番地</th>
                <th scope="col">建物名,部屋番号</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr> 
                <td data-label="内容" class="txt">{{ $user->id }}</td>
                <td data-label="価格" class="price">{{ $user->name }}</td>
                <td data-label="価格" class="price">{{ $user->kana }}</td>
                <td data-label="価格" class="price">{{ $user->email }}</td>
                <td data-label="価格" class="price">{{ $user->address_num }}</td>
                <td data-label="価格" class="price">{{ $user->prefectures }}</td>
                <td data-label="価格" class="price">{{ $user->address1 }}</td>
                <td data-label="価格" class="price">{{ $user->address2 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    <div class="ww">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')" id="button"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('ログアウト') }}
        </x-dropdown-link>
    </form>
</div>
</body>
</html>