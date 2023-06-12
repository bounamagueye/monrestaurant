<?php 
//inclure la page connexion
  include_once "connexion.php";
  //verifier si une session existe
  if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
  }
  //creer la session
  if(!isset($_SESSION['panier'])){
    //s'il n'existe pas une session on crée une et on mets un tableau à l'intérieur
    $_SESSION['panier'] = array();
  }
  //recuperation de l'id dans le lien

  if(isset($_GET['id'])){
    //si un id a ete envoyé
    $id = $_GET['id'];
    //verifier grace a l'id si le produit existe dans la base de donnee
    $produit = mysqli_query($con, "SELECT * FROM products WHERE id = $id");
    if(empty(mysqli_fetch_assoc($produit))){
        // si ce produit n'existe pas 
        die("Ce produit n'existe pas ");
    }
    //ajouter le produit dans le panier (le tableau)
    if(isset($_SESSION['panier'][$id])){
        //si le produit est  déjà dans le panier
        $_SESSION['panier'][$id]++; //represente la quantite
    }else {
        //sinon on ajoute le produit
        $_SESSION['panier'][$id] = 1;
    }
    //redirection vers la page index.php
    header("location: index.php");
  }
?>