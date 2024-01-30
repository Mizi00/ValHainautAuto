@extends('layouts.app')

@section('body')
<x-navbar />

<section class="hero">
    <div class="hero-inner">
        <h1>VALHAINAUT AUTO</h1>
        <h4>Concessionnaire. Mécanique automobile. Service carte grise. Depuis 2015</h4>
        <a class="button-hero" href="#propos-id">COMMENCER</a>
    </div>
</section>

<section class="propos" >
    <div class="propos-inner" id="propos-id">
        <h1>Qui Sommes-Nous ?</h1>
        <div class="propos-text">
            Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores extollere. Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non fere contingit nisi iis qui etiam contemnendos se arbitrantur; qui hac opinione non modo verbis sed etiam opere levandi sunt.

            Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.

            Alios autem dicere aiunt multo etiam inhumanius (quem locum breviter paulo ante perstrinxi) praesidii adiumentique causa, non benevolentiae neque caritatis, amicitias esse expetendas; itaque, ut quisque minimum firmitatis haberet minimumque virium, ita amicitias appetere maxime; ex eo fieri ut mulierculae magis amicitiarum praesidia quaerant quam viri et inopes quam opulenti et calamitosi quam ii qui putentur beati.

            Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores extollere. Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non fere contingit nisi iis qui etiam contemnendos se arbitrantur; qui hac opinione non modo verbis sed etiam opere levandi sunt.

            Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.

            Alios autem dicere aiunt multo etiam inhumanius (quem locum breviter paulo ante perstrinxi) praesidii adiumentique causa, non benevolentiae neque caritatis, amicitias esse expetendas; itaque, ut quisque minimum firmitatis haberet minimumque virium, ita amicitias appetere maxime; ex eo fieri ut mulierculae magis amicitiarum praesidia quaerant quam viri et inopes quam opulenti et calamitosi quam ii qui putentur beati.
        </div>
    </div>
</section>

<div class="contact">
    <h1>Contactez-Nous !</h1>
    <form action="">
        <div class="contact-np">
            <label for="">Prénom: <input type="text" name="prenom" id="prenom"></label>
            <label for="">Nom: <input type="text" name="nom" id="nom"></label>
        </div>
        <label for="">Adresse Mail: <input type="text" name="email" id="email"></label>
        <label for="">Votre Message :
            <textarea name="msg" id="msg" placeholder="Ecrire ici ..." style="height:200px"></textarea>
        </label>
        <input type="submit" name="Envoyer" id="button">
    </form>
</div>


@endsection