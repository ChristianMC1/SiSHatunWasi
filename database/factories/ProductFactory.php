<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $categoryId = $this->faker->numberBetween(1, 10);
        $category = Category::find($categoryId);

        if (!$category) {
            return [
                'nombre' => $this->faker->words(2, true),
                'descripcion' => $this->faker->sentence(),
                'cantidad' => $this->faker->numberBetween(1, 50),
                'precio' => $this->faker->randomFloat(2, 10, 500),
                'disponible' => $this->faker->boolean(80),
                'category_id' => null,
            ];
        }

        [$productName, $minPrice, $maxPrice] = $this->getProductForCategory($category->slug);

        return [
            'nombre' => $productName,
            'descripcion' => $category->slug . ' de alta calidad. ' . $this->faker->sentence(),
            'cantidad' => $this->faker->numberBetween(5, 200),
            'precio' => $this->faker->randomFloat(2, $minPrice, $maxPrice),
            'disponible' => $this->faker->boolean(85),
            'category_id' => $category->id,
        ];
    }

    public function forCategory(string $slug): static
    {
        return $this->state(function () use ($slug) {
            $category = Category::where('slug', $slug)->first();

            if (!$category) {
                return [];
            }

            [$productName, $minPrice, $maxPrice] = $this->getProductForCategory($slug);

            return [
                'nombre' => $productName,
                'descripcion' => $slug . ' de alta calidad. ' . $this->faker->sentence(),
                'cantidad' => $this->faker->numberBetween(5, 200),
                'precio' => $this->faker->randomFloat(2, $minPrice, $maxPrice),
                'disponible' => $this->faker->boolean(85),
                'category_id' => $category->id,
            ];
        });
    }

    private function getProductForCategory(string $slug): array
    {
        $catalog = [
            'Porcelanatos' => [
                ['Porcelanato Pulido 60x60', 35, 65],
                ['Porcelanato Esmaltado 45x45', 28, 55],
                ['Porcelanato Rectificado 80x80', 45, 85],
                ['Porcelanato Brillante 30x60', 32, 60],
                ['Porcelanato Mate 60x120', 50, 95],
                ['Porcelanato Venus 45x45', 30, 58],
                ['Porcelanato Marmol 60x60', 40, 78],
                ['Porcelanato Onice 30x60', 35, 68],
                ['Porcelanato Granito 80x80', 48, 90],
                ['Porcelanato Travertino 45x90', 42, 80],
            ],
            'Tablones' => [
                ['Tablon Roble Natural 15x90', 38, 72],
                ['Tablon Nogal Americano 20x120', 45, 85],
                ['Tablon Cerezo Clasico 15x60', 35, 65],
                ['Tablon IPE Madera 18x100', 42, 80],
                ['Tablon Bambu Natural 20x90', 40, 75],
                ['Tablon Wenge Oscuro 15x120', 48, 88],
                ['Tablon Teca Premium 18x60', 38, 70],
                ['Tablon Olivo Vintage 20x100', 44, 82],
                ['Tablon Haya Rustico 15x90', 36, 68],
                ['Tablon Caoba Imperial 20x120', 50, 92],
            ],
            'Cerámicos' => [
                ['Ceramico Esmaltado 30x30', 18, 35],
                ['Ceramico Antideslizante 45x45', 22, 42],
                ['Ceramico Brillante 20x20', 15, 30],
                ['Ceramico Mate 33x33', 20, 38],
                ['Ceramico Rustico 25x40', 25, 45],
                ['Ceramico Decorado 30x60', 28, 50],
                ['Ceramico Piedra 45x45', 24, 44],
                ['Ceramico Liso 20x30', 16, 32],
                ['Ceramico Texturizado 33x60', 26, 48],
                ['Ceramico Metalico 30x30', 30, 55],
            ],
            'Revestimientos para pared' => [
                ['Revestimiento Ladrillo Visto 10x30', 22, 40],
                ['Revestimiento Piedra Laja 15x40', 28, 52],
                ['Revestimiento Pizarra 20x30', 25, 48],
                ['Revestimiento Madera 12x60', 32, 58],
                ['Revestimiento Marmol 30x60', 38, 72],
                ['Revestimiento Cementicio 15x45', 26, 50],
                ['Revestimiento 3D Hexagonal 20x20', 35, 65],
                ['Revestimiento Rustico 10x40', 24, 44],
                ['Revestimiento Onix 25x50', 30, 55],
                ['Revestimiento Textil 15x60', 34, 62],
            ],
            'Combinaciones' => [
                ['Kit Bano Marmol+Venus', 55, 110],
                ['Juego Cocina Piedra+Cemento', 50, 100],
                ['Set Sala Roble+Nogal', 65, 130],
                ['Combo Dormitorio Cerezo+Olivo', 60, 120],
                ['Pack Terraza Bambu+Teca', 70, 140],
                ['Duo Pasillo Haya+Wenge', 58, 115],
                ['Trio Living Roble+Cerezo+Caoba', 80, 160],
                ['Kit Comedor Marmol+Granito', 75, 150],
                ['Juego Bano Piedra+Marmol', 62, 125],
                ['Coleccion Premium 4 disenos', 90, 180],
            ],
            'Insertos y lápices' => [
                ['Lapiz Decorativo Dorado 2x30', 8, 18],
                ['Inserto Floral 10x10', 12, 25],
                ['Lapiz Plateado 2x40', 9, 20],
                ['Inserto Geometrico 15x15', 14, 28],
                ['Lapiz Bronce 2x25', 8, 16],
                ['Inserto Mosaico 10x20', 15, 30],
                ['Lapiz Negro Mate 2x60', 10, 22],
                ['Inserto Hojas 15x15', 13, 26],
                ['Lapiz Blanco Brillante 2x30', 7, 15],
                ['Inserto Estrella 10x10', 11, 24],
            ],
            'Porcelanatos grandes' => [
                ['Porcelanato XXL 120x120', 80, 160],
                ['Porcelanato Gigante 90x180', 95, 190],
                ['Porcelanato Maximo 120x240', 120, 240],
                ['Porcelanato Ultra 100x200', 110, 220],
                ['Porcelanato Premium 80x180', 100, 200],
                ['Porcelanato Mega 150x150', 140, 280],
                ['Porcelanato Jumbo 60x180', 90, 175],
                ['Porcelanato Colosal 120x260', 130, 260],
                ['Porcelanato Titanio 90x90', 85, 165],
                ['Porcelanato Imperial 100x300', 150, 300],
            ],
            'Componentes' => [
                ['Perfil Aluminio Esquina L 2.5m', 12, 28],
                ['Junta Expansion 10mm 3m', 8, 18],
                ['Cruce Nivelador 1mm Bolsa 100u', 15, 32],
                ['Perfil Remate Acero 2m', 10, 22],
                ['Separador Plastico 3mm Bolsa 200u', 6, 14],
                ['Perfil Aluminio Transicion 2.5m', 14, 30],
                ['Cuna Niveladora Reutilizable 50u', 18, 38],
                ['Junta Silicona Expansiva 5m', 9, 20],
                ['Perfil Lluvia Aluminio 2m', 11, 25],
                ['Kit Nivelacion Completo 500u', 25, 50],
            ],
            'Pegamentos' => [
                ['Pegamento Ceramico Estandar 25kg', 22, 38],
                ['Adhesivo Porcelanato Premium 20kg', 35, 60],
                ['Pegamento Flexible 25kg', 28, 48],
                ['Adhesivo Marmol 15kg', 40, 70],
                ['Pegamento Extrarrapido 20kg', 32, 55],
                ['Cemento Cola Especial 25kg', 25, 42],
                ['Adhesivo Alta Resistencia 20kg', 38, 65],
                ['Pegamento Impermeable 15kg', 30, 52],
                ['Mortero Nivelador 25kg', 26, 45],
                ['Adhesivo Multiuso 20kg', 20, 35],
            ],
            'Accesorios' => [
                ['Corta Ceramico Manual 60cm', 45, 90],
                ['Llana Dentada Acero 30cm', 15, 32],
                ['Boquillera Plastica 10m', 8, 18],
                ['Epatula Goma 20cm', 6, 14],
                ['Taladro Percutor 800W', 80, 160],
                ['Nivel Laser 3 Lineas', 65, 130],
                ['Cincel Plano 25mm', 10, 22],
                ['Martillo de Goma 500g', 12, 26],
                ['Mezclador Vertical 1200W', 90, 180],
                ['Balde Plastico 20L', 5, 12],
            ],
        ];

        $products = $catalog[$slug] ?? [];

        if (empty($products)) {
            return [$this->faker->words(2, true), 10, 100];
        }

        $selected = $this->faker->randomElement($products);

        return [$selected[0], $selected[1], $selected[2]];
    }
}
