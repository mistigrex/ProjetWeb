@extends('layouts.app')


@section('content')
<section class="cadre">

@include('dashboard')

@if(count($administrations) > 0)
@foreach($administrations as $administration)

      <tr>
            <td>
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <a href="#" class="user-link">{{$administration->firstname}} {{$administration->name}}</a>
            </td>
            <td>
                    {{$administration->created_at}}
            </td>
            <td class="text-center">
                <span class="label label-default">{{$administration->Role_id}}</span>
            </td>
            <td>
                <a href="#">{{$administration->email}}</a>
            </td>
            <td style="width: 20%;">
                    <a href="#" class="table-link">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                <a href="#" class="table-link danger">
                    <span class="fa-stack">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fas fa-trash"></i>
                    </span>
                </a>
            </td>
        </tr>
        <tr>
@endforeach
     
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
</div>



@else
<h1>Aucun Utilisateurs dans la base de données</h1>
@endif


</section>
@endsection