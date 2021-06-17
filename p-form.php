<?php
require_once 'includes/p-header.php';
switch($_GET['act'])
{
default:
  header("Location: $link/error/405");
break;

// EDIT CATEGORY
case 'editcategories':
  if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
      if(isset($_POST['category_name'], $_POST['category_tag'], $_POST['category_id'])){
        if(!empty($_POST['category_name']) AND !empty($_POST['category_tag']) AND !empty ($_POST['category_id'])){
          $category_id = htmlspecialchars($_POST['category_id']);
          $category_name = htmlspecialchars($_POST['category_name']);
          $category_tag = htmlspecialchars($_POST['category_tag']);
          $category_insert = $db->prepare("UPDATE articles_categories SET name = ?, tag = ? WHERE id = ?");
          $category_insert->execute(array($category_name, $category_tag, $category_id));
          $smarty->assign("success", $l_categoryupdated);
          header("Location: $link/panel/categories/articles/$page_id");
        }
      }
    }else{
      header("Location: $link/error/403");
    }
  }else{
    header("Location: $link/login");
  }
break;

// EDIT PAGE
case 'editpages':
  if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
      if(isset($_POST['page_title'], $_POST['page_section'], $_POST['page_id'])){
        if(!empty($_POST['page_title']) AND !empty($_POST['page_section']) AND !empty ($_POST['page_id'])){
          $page_id = htmlspecialchars($_POST['page_id']);
          $page_title = htmlspecialchars($_POST['page_title']);
          $page_section = $_POST['page_section'];
          $page_menu = $_POST['page_menu'];
          $page_insert = $db->prepare("UPDATE pages SET title = ?, section = ?, menu = ? WHERE id = ?");
          $page_insert->execute(array($page_title, $page_section, $page_menu, $page_id));
          $smarty->assign("success", $l_pageupdated);
          header("Location: $link/panel/edit/pages/$page_id");
        }
      }
    }else{
      header("Location: $link/error/403");
    }
  }else{
    header("Location: $link/login");
  }
break;

// EDIT ARTICLES
case 'editarticles': 
  if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
      if(isset($_POST['article_title'], $_POST['article_section'], $_POST['article_id'])){
        if(!empty($_POST['article_title']) AND !empty($_POST['article_section']) AND !empty($_POST['article_id'])){
          $article_id = htmlspecialchars($_POST['article_id']);
          $article_title = htmlspecialchars($_POST['article_title']);
          $article_descr = htmlspecialchars($_POST['article_descr']);
          $article_img = $_POST['article_img'];
          $article_category = $_POST['article_category'];
          $article_section = $_POST['article_section'];
          $article_pin = $_POST['article_pin'];
          $article_insert = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, category = ?, section = ?, pin = ? WHERE id = ?");
          $article_insert->execute(array($article_title, $article_descr, $article_img, $article_category, $article_section, $article_pin, $article_id));
          $smarty->assign("success", $l_articleupdated);
          header("Location: $link/panel/edit/articles/$article_id");
        }
      }
    }else{
      header("Location: $link/error/403");
    }
  }else{
    header("Location: $link/login");
  }
break;

// CONFIGURATION
case 'configuration':
  if(isset($_SESSION['id'])){
    if($user['rank'] == 2){
      if(isset($_POST['config_wsname'], $_POST['config_wsdescr'], $_POST['config_wslink'], $_POST['config_wslang'], $_POST['config_wstheme'], $_POST['config_wspaneltheme'], $_POST['config_register'])){
        if(!empty($_POST['config_wsname']) AND !empty($_POST['config_wsdescr']) AND !empty($_POST['config_wslink']) AND !empty($_POST['config_wslang']) AND !empty($_POST['config_wstheme']) AND !empty($_POST['config_wspaneltheme']) AND !empty($_POST['config_register'])){
          $config_wsname = htmlspecialchars($_POST['config_wsname']);
          $config_wsdescr = htmlspecialchars($_POST['config_wsdescr']);
          $config_wslink = htmlspecialchars($_POST['config_wslink']);
          $config_wslang = htmlspecialchars($_POST['config_wslang']);
          $config_wstheme = htmlspecialchars($_POST['config_wstheme']);
          $config_wspaneltheme = htmlspecialchars($_POST['config_wspaneltheme']);
          $config_register = htmlspecialchars($_POST['config_register']);
          $config_insert = $db->prepare("UPDATE config SET wsname = ?, wsdescr = ?, wslink = ?, wslang = ?, wstheme = ?, wspaneltheme = ?, register = ? WHERE id = ?");
          $config_insert->execute(array($config_wsname, $config_wsdescr, $config_wslink, $config_wslang, $config_wstheme, $config_wspaneltheme, $config_register, 1));
          header("Location: $link/panel/configuration/");
        }
      }
    }else{
        header("Location: $link/error/403");
    }
  }else{
      header("Location: $link/login");
  }
break;
}
?>