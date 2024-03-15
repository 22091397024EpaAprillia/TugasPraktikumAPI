<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                {
                    return [
                        'nama' => ['required', 'string', 'max:255'],
                        'nim' => ['required', 'string', 'max:20', 'unique:mahasiswa'],
                        'jurusan' => ['required', 'string', 'max:255'],
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'nama' => ['required', 'string', 'max:255'],
                        'nim' => ['required', 'string', 'max:20', 'unique:mahasiswa,nim,' . $this->route('mahasiswa')->id],
                        'jurusan' => ['required', 'string', 'max:255'],
                    ];
                }
            default:
                break;
        }
    }
}
