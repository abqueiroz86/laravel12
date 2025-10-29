@extends('layouts.master')

@section('page_name','Usuários Cadastrados')

@section('content')
    <div class="table-container">
        <table id="usersTable">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Data de Cadastro</th>
                    {{-- <th>Ações</th> --}}
                </tr>
            </thead>
            <tbody id="tableBody">
                @foreach ( $users as $user )
                    <tr>
                        <td>
                            <div class="user-info">
                                <strong>{{ $user->name }}</strong>
                            </div>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        {{-- <td>
                            <div class="actions">
                                <button class="btn-action btn-edit" onclick="editUser(${user.id})">✏️ Editar</button>
                                <button class="btn-action btn-delete" onclick="deleteUser(${user.id})">🗑️ Excluir</button>
                            </div>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination-container">
            <div class="pagination-info">
                Mostrando <strong>{{ $users->firstItem() }}</strong> até 
                <strong>{{ $users->lastItem() }}</strong> de 
                <strong>{{ $users->total() }}</strong> usuários
            </div>
            
            <div class="pagination-wrapper">
                {{ $users->links('pagination.custom') }}
            </div>

            <div id="noResults" class="no-results" style="display: none;">
                Nenhum usuário encontrado
            </div>
        </div>
    </div>
@endsection