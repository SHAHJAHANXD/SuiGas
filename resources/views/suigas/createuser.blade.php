<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add User</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
                                @if (Auth::user()->role == 'admin')
                                <form method="POST" action="{{ url('admin-store') }}">
                                @else
                                <form method="POST" action="{{ url('store') }}">
                                @endif
									@csrf
									<div class="form-group">
										<label class="text-black font-w500">User Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									@if(Auth::user()->role == 'superadmin')
									<div class="form-group">
										<label class="text-black font-w500">Role</label>
										<select class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                              <option value="superadmin">Super Admin</option>
                                              <option value="hr">HR</option>
                                              <option value="admin">Admin</option>
                                              <option value="user">User</option>
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									@elseif(Auth::user()->role == 'admin')
									<div class="form-group">
										<label class="text-black font-w500">Role</label>
										<select class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                              <option value="hr">HR</option>
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									@endif
									<div class="form-group">
										<label class="text-black font-w500">Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Confirm Password</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
