@extends('layouts.layout')

@section('title', 'Home')

@section('content')

    <div width="80%" style="margin: 0 auto">

            <a href="{{route('lineups.create', $data['id'])}}">Add group/singer</a>

            <table>
                <th>gruppo_musicale</th>
                <th>traccia</th>
                <th>genere</th>
                <th>data_esibizione</th>
                <th>orario_esibizione</th>
                <tbody>
                    @forelse ($data as $da)
                        <tr>
                            <td>{{$da['gruppo_musicale']}}</td>
                            <td>{{$da['traccia']}}</td>
                            <td>{{$da['genere']}}</td>
                            <td>{{$da['data_esibizione']}}</td>
                            <td>{{$da['orario_esibizione']}}</td>
                        </tr>
                        <a href="{{route('lineups.show', $da->id)}}">View</a>
                        <a href="{{route('lineups.edit', $da->id)}}">Modify</a>
                        @empty

                        @endforelse
                </tbody>
            </table>


    </div>

@endsection
