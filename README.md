# Larashipcost

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thiccpan/larashipcost.svg?style=flat-square)](https://packagist.org/packages/thiccpan/larashipcost)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/thiccpan/larashipcost/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/thiccpan/larashipcost/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/thiccpan/larashipcost.svg?style=flat-square)](https://packagist.org/packages/thiccpan/larashipcost)

Larashipcost adalah package wrapper yang berfungsi untuk mendapatkan perhitungan ongkos kirim jasa kurir menggunakan endpoint dari API [RajaOngkir](https://rajaongkir.com) dan [RatuOngkir](https://ratuongkir.com).

## Instalasi

Untuk menggunakan package:

```bash
composer require thiccpan/larashipcost
```

Tambahkan API_KEY_RAJAONGKIR pada file ```.env``` seperti berikut:
```bash
RAJAONGKIR_API_KEY="API_KEY"
```

## Usage
<table>
<tr>
<td> Provider </td> <td> Class </td>
</tr>
<tr>
<td>
Raja Ongkir
</td>
<td>
    
```php
new RajaOngkirProvider();
```
</td>
</tr>
<tr>
<td>
Ratu Ongkir
</td>
<td>
    
```php
new RatuOngkirProvider();
```
</td>
</tr>
</table>


### Sample Usage
```php
$builder = new ProviderBuilder();
$rajaOngkir = $builder
    ->setIdKota(1) // Set Asal Kota berdasarkan ID
    ->setDestination(1) // Set Destinasi berdasarkan ID
    ->setCourier('jne') // Set Kurir Barang 
    ->setWeight(1000) // Set Berat Barang
    ->build('rajaongkir'); // Get Ongkos Kirim dengan memberikan tipe provider

if ($rajaOngkir instanceof RajaOngkirProvider) {
    return $rajaOngkir->getShippingCost();
}
```

## List ID Provinsi [RajaOngkir](https://rajaongkir.com)
| ID  | Provinsi |
| ----------- | ----------- |
|1     | Bali   
|2     | Bangka Belitung
|3     | Banten
|4     | Bengkulu
|5     | DI Yogyakarta
|6     | DKI Jakarta
|7     | Gorontalo
|8     | Jambi
|9     | Jawa Barat
|10    | Jawa Tengah
|11    | Jawa Timur
|12    | Kalimantan Barat
|13    | Kalimantan Selatan
|14    | Kalimantan Tengah
|15    | Kalimantan Timur
|16    | Kalimantan Utara
|17    | Kepulauan Riau
|18    | Lampung
|19    | Maluku
|20    | Maluku Utara
|21    | Nanggroe Aceh Darussalam (NAD)
|22    | Nusa Tenggara Barat (NTB)
|23    | Nusa Tenggara Timur (NTT)
|24    | Papua
|25    | Papua Barat
|26    | Riau
|27    | Sulawesi Barat
|28    | Sulawesi Selatan
|29    | Sulawesi Tengah
|30    | Sulawesi Tenggara
|31    | Sulawesi Utara
|32    | Sumatera Barat
|33    | Sumatera Selatan
|34    | Sumatera Utara

## List ID Kota [RajaOngkir](https://rajaongkir.com)
| ID  | Kota |
| ----------- | ----------- |
| 1     | Kabupaten Aceh Barat         |
| 2     | Kabupaten Aceh Barat Daya    |
| 3     | Kabupaten Aceh Besar         |
| 4     | Kabupaten Aceh Jaya        |
| 5     | Kabupaten Aceh Selatan    |
| 6     | Kabupaten Aceh Singkil    |
| 7     | Kabupaten Aceh Tamiang        |
| 8     | Kabupaten Aceh Tengah    |
| 9     | Kabupaten Aceh Tenggara    |
| 10    | Kabupaten Aceh Timur       |
| 11    | Kabupaten Aceh Utara    |
| 12    | Kabupaten Agam    |
| 13    | Kabupaten Alor        |
| 14    | Kota Ambon    |
| 15    | Kabupaten Asahan    |
| 16    | Kabupaten Asmat        |
| 17    | Kabupaten Badung    |
| 18    | Kabupaten Balangan    |
| 19    | Kota Balikpapan        |
| 20    | Kota Banda Aceh    |
| 21    | Kota Bandar Lampung    |
| 22    | Kabupaten Bandung        |
| 23    | Kota Bandung    |
| 24    | Kabupaten Bandung Barat   |
| 25    | Kabupaten Banggai       |
| 26    | Kabupaten Banggai Kepulauan       |
| 27    | Kabupaten Bangka       |
| 28    | Kabupaten Bangka Barat       |
| 29    | Kabupaten Bangka Selatan       |
| 30    | Kabupaten Bangka Tengah       |
| 31    | Kabupaten Bangkalan       |
| 32    | Kabupaten Bangli       |
| 33    | Kabupaten Banjar       |
| 34    | Kota Banjar       |
| 35    | Kota Banjarbaru       |
| 36    | Kota Banjarmasin       |
| 37    | Kabupaten Banjarnegara       |
| 38    | Kabupaten Bantaeng       |
| 39    | Kabupaten Bantul       |
| 40    | Kabupaten Banyuasin       |
| 41    | Kabupaten Banyumas       |
| 42    | Kabupaten Banyuwangi       |
| 43    | Kabupaten Barito Kuala       |
| 44    | Kabupaten Barito Selatan       |
| 45    | Kabupaten Barito Timur       |
| 46    | Kabupaten Barito Utara       |
| 47    | Kabupaten Barru       |
| 48    | Kota Batam       |
| 49    | Kabupaten Batang          |
| 50    | Kabupaten Batang Hari          |
| 51    | Kota Batu          |
| 52    | Kabupaten Batu Bara          |
| 53    | Kota Bau-Bau          |
| 54    | Kabupaten Bekasi          |
| 55    | Kota Bekasi          |
| 56    | Kabupaten Belitung          |
| 57    | Kabupaten Belitung Timur          |
| 58    | Kabupaten Belu          |
| 59    | Kabupaten Bener Meriah          |
| 60    | Kabupaten Bengkalis          |
| 61    | Kabupaten Bengkayang          |
| 62    | Kota Bengkulu          |
| 63    | Kabupaten Bengkulu Selatan          |
| 64    | Kabupaten Bengkulu Tengah          |
| 65    | Kabupaten Bengkulu Utara          |
| 66    | Kabupaten Berau          |
| 67    | Kabupaten Biak Numfor          |
| 68    | Kabupaten Bima          |
| 69    | Kota Bima          |
| 70    | Kota Binjai          |
| 71    | Kabupaten Bintan          |
| 72    | Kabupaten Bireuen          |
| 73    | Kota Bitung          |
| 74    | Kabupaten Blitar          |
| 75    | Kota Blitar          |
| 76    | Kabupaten Blora          |
| 77    | Kabupaten Boalemo          |
| 78    | Kabupaten Bogor          |
| 79    | Kota Bogor          |
| 80    | Kabupaten Bojonegoro          |
| 81    | Kabupaten Bolaang Mongondow (Bolmong)          |
| 82    | Kabupaten Bolaang Mongondow Selatan          |
| 83    | Kabupaten Bolaang Mongondow Timur          |
| 84    | Kabupaten Bolaang Mongondow Utara          |
| 85    | Kabupaten Bombana          |
| 86    | Kabupaten Bondowoso          |
| 87    | Kabupaten Bone          |
| 88    | Kabupaten Bone Bolango          |
| 89    | Kota Bontang          |
| 90    | Kabupaten Boven Digoel          |
| 91    | Kabupaten Boyolali          |
| 92    | Kabupaten Brebes          |
| 93    | Kota Bukittinggi          |
| 94    | Kabupaten Buleleng          |
| 95    | Kabupaten Bulukumba          |
| 96    | Kabupaten Bulungan (Bulongan)          |
| 97    | Kabupaten Bungo          |
| 98    | Kabupaten Buol          |
| 99    | Kabupaten Buru          |
| 100   | Kabupaten Buru Selatan          |
| 101   | Kabupaten Buton          |
| 102   | Kabupaten Buton Utara          |
| 103   | Kabupaten Ciamis          |
| 104   | Kabupaten Cianjur          |
| 105   | Kabupaten Cilacap          |
| 106   | Kota Cilegon          |
| 107   | Kota Cimahi          |
| 108   | Kabupaten Cirebon          |
| 109   | Kota Cirebon          |
| 110   | Kabupaten Dairi           |
| 111   | Kabupaten Deiyai (Deliyai)          |
| 112   | Kabupaten Deli Serdang          |
| 113   | Kabupaten Demak          |
| 114   | Kota Denpasar          |
| 115   | Kota Depok          |
| 116   | Kabupaten Dharmasraya          |
| 117   | Kabupaten Dogiyai          |
| 118   | Kabupaten Dompu          |
| 119   | Kabupaten Donggala          |
| 120   | Kota Dumai          |
| 121   | Kabupaten Empat Lawang          |
| 122   | Kabupaten Ende          |
| 123   | Kabupaten Enrekang          |
| 124   | Kabupaten Fakfak          |
| 125   | Kabupaten Flores Timur          |
| 126   | Kabupaten Garut          |
| 127   | Kabupaten Gayo Lues          |
| 128   | Kabupaten Gianyar          |
| 129   | Kabupaten Gorontalo          |
| 130   | Kota Gorontalo          |
| 131   | Kabupaten Gorontalo Utara          |
| 132   | Kabupaten Gowa          |
| 133   | Kabupaten Gresik          |
| 134   | Kabupaten Grobogan          |
| 135   | Kabupaten Gunung Kidul          |
| 136   | Kabupaten Gunung Mas          |
| 137   | Kota Gunungsitoli          |
| 138   | Kabupaten Halmahera Barat          |
| 139   | Kabupaten Halmahera Selatan          |
| 140   | Kabupaten Halmahera Tengah          |
| 141   | Kabupaten Halmahera Timur          |
| 142   | Kabupaten Halmahera Utara          |
| 143   | Kabupaten Hulu Sungai Selatan          |
| 144   | Kabupaten Hulu Sungai Tengah          |
| 145   | Kabupaten Hulu Sungai Utara          |
| 146   | Kabupaten Humbang Hasundutan          |
| 147   | Kabupaten Indragiri Hilir          |
| 148   | Kabupaten Indragiri Hulu          |
| 149   | Kabupaten Indramayu          |
| 150   | Kabupaten Intan Jaya          |
| 151   | Kota Jakarta Barat                 |
| 152   | Kota Jakarta Pusat          |
| 153   | Kota Jakarta Selata          |
| 154   | Kota Jakarta Timur          |
| 155   | Kota Jakarta Utara          |
| 156   | Kota Jambi          |
| 157   | Kabupaten Jayapura          |
| 158   | Kota Jayapura          |
| 159   | Kabupaten Jayawijaya          |
| 160   | Kabupaten Jember          |
| 161   | Kabupaten Jembrana          |
| 162   | Kabupaten Jeneponto          |
| 163   | Kabupaten Jepara          |
| 164   | Kabupaten Jombang          |
| 165   | Kabupaten Kaimana          |
| 166   | Kabupaten Kampar          |
| 167   | Kabupaten Kapuas          |
| 168   | Kabupaten Kapuas Hulu          |
| 169   | Kabupaten Karanganyar          |
| 170   | Kabupaten Karangasem          |
| 171   | Kabupaten Karawang          |
| 172   | Kabupaten Karimun          |
| 173   | Kabupaten Karo          |
| 174   | Kabupaten Katingan          |
| 175   | Kabupaten Kaur          |
| 176   | Kabupaten Kayong Utara          |
| 177   | Kabupaten Kebumen          |
| 178   | Kabupaten Kediri          |
| 179   | Kota Kediri          |
| 180   | Kabupaten Keerom          |
| 181   | Kabupaten Kendal          |
| 182   | Kota Kendari          |
| 183   | Kabupaten Kepahiang          |
| 184   | Kabupaten Kepulauan Anambas             |
| 185   | Kabupaten Kepulauan Aru           |
| 186   | Kabupaten Kepulauan Mentawai           |
| 187   | Kabupaten Kepulauan Meranti           |
| 188   | Kabupaten Kepulauan Sangihe           |
| 189   | Kabupaten Kepulauan Seribu           |
| 190   | Kabupaten Kepulauan Siau Tagulandang Biaro          |
| 191   | Kabupaten Kepulauan Sula           |
| 192   | Kabupaten Kepulauan Talaud           |
| 193   | Kabupaten Kepulauan Yapen (Yapen Waropen)           |
| 194   | Kabupaten Kerinci                     |
| 195   | Kabupaten Ketapang          |
| 196   | Kabupaten Klaten          |
| 197   | Kabupaten Klungkung          |
| 198   | Kabupaten Kolaka          |
| 199   | Kabupaten Kolaka Utara          |
| 200   | Kabupaten Konawe          |
| 201   | Kabupaten Konawe Selatan          |
| 202   | Kabupaten Konawe Utara          |
| 203   | Kabupaten Kotabaru          |
| 204   | Kota Kotamobagu          |
| 205   | Kabupaten Kotawaringin Barat          |
| 206   | Kabupaten Kotawaringin Timur          |
| 207   | Kabupaten Kuantan Singingi          |
| 208   | Kabupaten Kubu Raya          |
| 209   | Kabupaten Kudus          |
| 210   | Kabupaten Kulon Progo          |
| 211   | Kabupaten Kuningan          |
| 212   | Kabupaten Kupang          |
| 213   | Kota Kupang          |
| 214   | Kabupaten Kutai Barat          |
| 215   | Kabupaten Kutai Kartanegara          |
| 216   | Kabupaten Kutai Timur          |
| 217   | Kabupaten Labuhan Batu          |
| 218   | Kabupaten Labuhan Batu Selatan          |
| 219   | Kabupaten Labuhan Batu Utara          |
| 220   | Kabupaten Lahat          |
| 221   | Kabupaten Lamandau          |
| 222   | Kabupaten Lamongan          |
| 223   | Kabupaten Lampung Barat          |
| 224   | Kabupaten Lampung Selatan          |
| 225   | Kabupaten Lampung Tengah          |
| 226   | Kabupaten Lampung Timur          |
| 227   | Kabupaten Lampung Utara          |
| 228   | Kabupaten Landak          |
| 229   | Kabupaten Langkat          |
| 230   | Kota Langsa          |
| 231   | Kabupaten Lanny Jaya          |
| 232   | Kabupaten Lebak          |
| 233   | Kabupaten Lebong          |
| 234   | Kabupaten Lembata          |
| 235   | Kota Lhokseumawe          |
| 236   | Kabupaten Lima Puluh Koto/Kota          |
| 237   | Kabupaten Lingga          |
| 238   | Kabupaten Lombok Barat          |
| 239   | Kabupaten Lombok Tengah          |
| 240   | Kabupaten Lombok Timur          |
| 241   | Kabupaten Lombok Utara          |
| 242   | Kota Lubuk Linggau          |
| 243   | Kabupaten Lumajang          |
| 244   | Kabupaten Luwu          |
| 245   | Kabupaten Luwu Timur          |
| 246   | Kabupaten Luwu Utara          |
| 247   | Kabupaten Madiun          |
| 248   | Kota Madiun          |
| 249   | Kabupaten Magelang          |
| 250   | Kota Magelang          |

## List ID Provinsi (RatuOngkir)
| ID | Provinsi |
| ----------- | ----------- |
| 1           | Jawa Timur      |
| 2           | Jawa Tengah      |

## List ID Kota (RatuOngkir)
| ID | Kota |
| ----------- | ----------- |
| 1     | Kota 1      |
| 2     | Kota 2      |
| 3     | Kota 3      |

## Return Value (sample)
### Get Shipping Cost
```json
{
    ...
    "results": [
      {
        "code": "jne",
        "name": "Jalur Nugraha Ekakurir (JNE)",
        "costs": [
          {
            "service": "OKE",
            "description": "Ongkos Kirim Ekonomis",
            "cost": [
              {
                "value": 66000,
                "etd": "3-4",
                "note": ""
              }
            ]
          },
          {
            "service": "REG",
            "description": "Layanan Reguler",
            "cost": [
              {
                "value": 72000,
                "etd": "2-3",
                "note": ""
              }
            ]
          }
        ]
      }
    ]
  }
}
```

## Credits

- [ThiccPan](https://github.com/ThiccPan) - Ivan Hilmi Derian 
- [ibrahimss02](https://github.com/ibrahimss02) - Ibrahim Sambata Sarborn
- [AlfitoDimasss](https://github.com/AlfitoDimasss) - Alfito Dimas Prasetyo
- [lintangtrisnadi](https://github.com/lintangtrisnadi) - Lintang Trisnadi
- [rizki0987](https://github.com/rizki0987) - Rizki Ali Ramadhan
- [joviar27](https://github.com/joviar27) - Joy Vianoktya Aristides

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
