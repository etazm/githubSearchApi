@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center">GitHub repo cards</h1>
        <br>
        <form id="filter-form" action="{{ route('list') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control filter-input" type="date" name="date" id="date"
                               value="{{ \App\Services\FilterService::DEFAULT_DATE }}"
                               max="{{ now()->subDay()->toDateString() }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="language">Language</label>
                        <select name="language" id="language" class="form-control filter-input">
                            <option selected disabled>Filter By Programing Language</option>
                            <option value="php">PHP</option>
                            <option value="python">Python</option>
                            <option value="javascript">JavaScript</option>
                            <option value="java">Java</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Show Results</p>

                        <input type="radio" class="btn-check filter-input" name="per_page"
                               id="per-page-10" value="10"
                               autocomplete="off" checked>
                        <label class="btn btn-outline-success"
                               for="per-page-10">10</label>

                        <input type="radio" class="btn-check filter-input" name="per_page"
                               id="per-page-50" value="50"
                               autocomplete="off">
                        <label class="btn btn-outline-success"
                               for="per-page-50">50</label>

                        <input type="radio" class="btn-check filter-input" name="per_page"
                               id="per-page-100" value="100"
                               autocomplete="off">
                        <label class="btn btn-outline-success"
                               for="per-page-100">100</label>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <div class="github-cards">
            <a href="https://github.com/Nexmo/nexmo-ruby" class="github-card" data-github="Nexmo/nexmo-ruby">
                <h3>nexmo-ruby</h3>
                <p>Nexmo REST API client for Ruby</p>
                <span class="github-card__meta">
                          <span class="github-card__language-icon" style="color: #7A0410;">●</span> Ruby
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>

            <a href="https://github.com/Nexmo/nexmo-php" class="github-card" data-github="Nexmo/nexmo-php">
                <h3>nexmo-php</h3>
                <p>Nexmo REST API client for PHP</p>
                <span class="github-card__meta">
                          <span class="github-card__language-icon" style="color: #4C5E99;">●</span> PHP
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>

            <a href="https://github.com/Nexmo/nexmo-python" class="github-card"
               data-github="Nexmo/nexmo-python">
                <h3>nexmo-python</h3>
                <p>Nexmo REST API client for Python</p>
                <span class="github-card__meta">
                          <span class="github-card__language-icon" style="color: #3572A5;">●</span> Python
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>

            <a href="https://github.com/Nexmo/nexmo-dotnet" class="github-card"
               data-github="Nexmo/nexmo-dotnet">
                <h3>nexmo-dotnet</h3>
                <p>Nexmo REST API client for .NET</p>
                <span class="github-card__meta">
                          <span class="github-card__language-icon" style="color: #178600;">●</span> C#
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>

            <a href="https://github.com/Nexmo/nexmo-node" class="github-card" data-github="Nexmo/nexmo-node">
                <h3>nexmo-node</h3>
                <p>Nexmo REST API client for Node.js</p>
                <span class="github-card__meta">
                          <span class="github-card__language-icon" style="color: #F1E05A;">●</span> JavaScript
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>

            <a href="https://github.com/Nexmo/nexmo-java" class="github-card" data-github="Nexmo/nexmo-java">
                <h3>nexmo-java</h3>
                <p>Nexmo REST API client for Java</p>
                <span class="github-card__meta">
                            <span class="github-card__language-icon" style="color: #B07219;">●</span> Java</span>
                <span class="github-card__meta">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <span data-stars>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
                <span class="github-card__meta">
                          <i class="fa fa-code-fork" aria-hidden="true"></i>
                          <span data-forks>
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                          </span>
                        </span>
            </a>
        </div>

    </div>
@endsection


@push('js')
    <script>
        const form = '#filter-form';
        const filter_inputs = '.filter-input';

        $(form).on('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const url = $(this).attr('action');

            $(filter_inputs).prop('disabled', true);

            $.ajax({
                url: url,
                data: formData,
                type: 'POST',
                contentType: false,
                processData: false,
                success: (response) => {
                    $('.github-cards').html('');
                    response.result.forEach((item) => {
                        $('.github-cards').append(`
                        <a href="${item.url}" class="github-card" data-github="${item.name}">
                            <h3>${item.name}</h3>
                            <p>${item.description}</p>
                            <span class="github-card__meta">
                              <span class="github-card__language-icon" style="color: #7A0410;">●</span> ${item.language}
                            </span>
                            <span class="github-card__meta">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <span data-stars>
                                <i class="fa fa-spinner" aria-hidden="true"></i>
                              </span>
                            </span>
                            <span class="github-card__meta">
                              <i class="fa fa-code-fork" aria-hidden="true"></i>
                              <span data-forks>
                                <i class="fa fa-spinner" aria-hidden="true"></i>
                              </span>
                            </span>
                        </a>`);

                        $(filter_inputs).prop('disabled', false);
                    })
                },
                fail: () => {
                    $(filter_inputs).prop('disabled', false);
                }
            });
        })

        $(filter_inputs).change(() => {
            $(form).submit();
        })

        $(() => {
            $(form).submit();
        })
    </script>
@endpush
