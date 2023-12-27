<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($arParams["TEMPLATE_THEME"]) && isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>
<div class="site-pagination">
	<div class="site-pagination">
	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if ($arResult["CURRENT_PAGE"] > 2):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>"><span><?echo GetMessage("round_nav_back")?></span></a>

		<?endif?>
			<a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span>1</span></a>
	<?else:?>
		<a class="active">1</a>
	<?endif?>

	<?
	$page = $arResult["START_PAGE"] + 1;
	while($page <= $arResult["END_PAGE"]-1):
	?>
		<?if ($page == $arResult["CURRENT_PAGE"]):?>
			<a class="active"><?=$page?></a>
		<?else:?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><?=$page?></a>
		<?endif?>
		<?$page++?>
	<?endwhile?>

	<?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a class="active"><?=$arResult["PAGE_COUNT"]?></a>
		<?endif?>
	<?endif?>

	</div>
</div>

