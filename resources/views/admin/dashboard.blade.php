@extends('admin_layout.master')

@section('title')
Dashboard
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4" style="align-items: center; display: contents;">TABLEAU DE BORD</h1>
        <ol class="breadcrumb mb-4">
            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">RECLAMATIONS</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Voir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">BULLETINS</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Voir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">ATTESTATIONS</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Voir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">DIPLOME</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Voir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                LISTES DES ETUDIANTS

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Search Bar -->
                        <input type="text" id="searchInput" placeholder="Search by Last Name, First Name, Mat Number, Email, etc.">
                        
                        <!-- Table -->
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Mat Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="userData"></tbody>
                                <!-- Add User Button -->
                        <button id="addButton">Ajouter un étudiant</button>
                        </table>

            </div>
            
        </div>
    </div>
</main>
        

@endsection

           
