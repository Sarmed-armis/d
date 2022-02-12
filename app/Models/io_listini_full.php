<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class io_listini_full extends Model
{
    use HasFactory;
    protected $fillable=['CHIAVE','COD_DITTA','TIPO_LISTINO','COD_ART','TIPO_CLIFOR','COD_CLIFOR','COD_DEPOSITO','COD_MACROAREA','COD_AREA','COD_ZONA','COD_MACROCATEGORIA','COD_CATEGORIA','COD_SOTTOCATEGORIA','COD_FAM_INIZIO','COD_FAM_FINE','COD_SFAM_INIZIO','COD_SFAM_FINE','COD_GRUPPO_INIZIO','COD_GRUPPO_FINE','COD_SGRUPPO_INIZIO','COD_SGRUPPO_FINE','COD_LISTINO','COD_CAMPAGNA','COD_DESTINAZIONE','COD_CLASSE','QUANTITA_INIZIO','QUANTITA_FINE','DATA_INIZIO','DATA_FINE','PREZZO','PRIORITA','SCONTO1','SCONTO2','SCONTO3','SCONTO4','SCONTO5','SCONTO6','SCONTO_IMP','MAG_PERC1','MAG_PERC2','MAG_IMP','IND_GES_PREZZO','IND_GES_SC1_PER','IND_GES_SC2_PER','IND_GES_SC3_PER','IND_GES_SC4_PER','IND_GES_SC5_PER','IND_GES_SC6_PER','IND_GES_SC_IMP','IND_GES_MAG1_PER','IND_GES_MAG2_PER','IND_GES_MAG_IMP','FLG_ESCLUDI_SCONTI','COD_COMBINAZIONE','COD_VALUTA','DAT_ULT_MOD
'];
}