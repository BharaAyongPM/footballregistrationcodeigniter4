namespace App\Helpers;

class ImageHelper
{
    /**
     * Membuat tag gambar HTML dengan path absolut
     *
     * @param  string $src Path absolut ke gambar
     * @param  string|array $attributes Atribut tambahan untuk tag gambar HTML
     * @return string Tag gambar HTML
     */
    public static function img(string $src, $attributes = ''): string
    {
        $attributes = is_array($attributes) ? stringify_attributes($attributes) : $attributes;

        return '<img src="' . esc($src) . '"' . $attributes . '>';
    }
}
