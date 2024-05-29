@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.gurudantenagakependidikan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.gurudantenagakependidikans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">{{ trans('cruds.gurudantenagakependidikan.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fullname">{{ trans('cruds.gurudantenagakependidikan.fields.fullname') }}</label>
                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', '') }}">
                @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.fullname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dateofbirth">{{ trans('cruds.gurudantenagakependidikan.fields.dateofbirth') }}</label>
                <input class="form-control datetimepicker {{ $errors->has('dateofbirth') ? 'is-invalid' : '' }}" type="text" name="dateofbirth" id="dateofbirth" value="{{ old('dateofbirth') }}">
                @if($errors->has('dateofbirth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dateofbirth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.dateofbirth_helper') }}</span>
            </div>
            <div class="form-group">
              <label for="gender">{{ trans('cruds.gurudantenagakependidikan.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" required>
                  <option value="Laki-laki " {{ old('gender') == 'Laki-laki' ? 'selected' : '' }} >Laki-laki</option>
                  <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              @if($errors->has('gender'))
                  <div class="invalid-feedback">
                      {{ $errors->first('gender') }}
                  </div>
              @endif
              <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="jenisgtk">{{ trans('cruds.gurudantenagakependidikan.fields.jenisgtk') }}</label>
                <input class="form-control {{ $errors->has('jenisgtk') ? 'is-invalid' : '' }}" type="text" name="jenisgtk" id="jenisgtk" value="{{ old('jenisgtk') }}">
                @if($errors->has('hiredate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenisgtk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.jenisgtk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="hiredate">{{ trans('cruds.gurudantenagakependidikan.fields.hiredate') }}</label>
                <input class="form-control datetimepicker {{ $errors->has('hiredate') ? 'is-invalid' : '' }}" type="text" name="hiredate" id="hiredate" value="{{ old('hiredate') }}">
                @if($errors->has('hiredate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hiredate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.hiredate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.gurudantenagakependidikan.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.gurudantenagakependidikan.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.gurudantenagakependidikan.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gurudantenagakependidikan.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.gurudantenagakependidikans.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $gurudantenagakependidikan->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.gurudantenagakependidikans.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($gurudantenagakependidikan) && $gurudantenagakependidikan->image)
      var file = {!! json_encode($gurudantenagakependidikan->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection