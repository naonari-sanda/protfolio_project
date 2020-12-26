@extends('layouts.app')
@section('title', 'ユーザー一覧ページ')

@section('content')
<section class="jumbotron text-center d-flex align-items-center visual">
    <div class="bg">
        <img class="card-img-top country_img" src="{{ asset('/storage/user.jpg' ) }}" alt="Card image cap" />
        <div class="container text">
            <h1 class="jumbotron-heading text-light mb-0">
                ユーザー一覧ページ
            </h1>
            <p class="lead text-light">Find your favorite user</p>

            <a href="{{ route('main') }}" type="button" class="btn btn-primary">お気に入りの国をさがそう！</a>
        </div>
    </div>
</section>

<div class="container mypage">
    <article class="user">
        <table class="table table-hover">
            <thead class="">
                <tr>
                    <th scope="col">ユーザー</th>
                    <th scope="col">性別</th>
                    <th scope="col">年齢</th>
                    <th scope="col">詳細</th>
                </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                <tr>

                    <td>
                        <a class="text-dark d-flex align-items-center font-weight-bold" href="{{ route('user', $user->id) }}">

                            @if(!empty($user->acounts->icon))
                            <img class="cycle img-thumbnail mr-2" src="{{ asset('/storage/' . $user->acounts->icon ) }}" alt="ユーザーアイコン" />
                            @elseif(optional($user->acounts)->gender == "男性")
                            <img class="cycle img-thumbnail mr-2" src="{{ asset('/storage/men.png') }}" alt="男性アイコン" />
                            @elseif(optional($user->acounts)->gender === "女性")
                            <img class="cycle img-thumbnail mr-2" src="{{ asset('/storage/women.png') }}" alt="女性アイコン" />
                            @else
                            <img class="cycle img-thumbnail mr-2" src="{{ asset('/storage/none.png') }}" alt="女性アイコン" />
                            @endif
                            {{ $user->name }}</a>
                    </td>
                    <td>{{ optional($user->acounts)->age ?? '回答なし' }}</td>
                    <td>{{ optional($user->acounts)->gender ?? '回答なし' }}</td>
                    <td>
                        <a href="{{ route('user', $user->id ) }}" class="btn btn-primary">詳細</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </article>
</div>
@endsection