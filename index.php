<?php

/*
Plugin Name: MKTP Crypto Widgets
Plugin URI: https://criptomonedasrentables.com
Description: Una serie de shortcodes para facilitar la implementación de widgets de las principales plataformas de criptomonedas
Version: 1.0.0
Author: MarketingPont.com Team
Author URI: https://marketingpont.com
*/

/*  
	Copyright MarketingPont.com
*/
//--------------------------------------------------------------------------------------------------------------------------*/


define( 'crwd_PLUGIN_URL', 		plugin_dir_url(__FILE__) );
define( 'crwd_PLUGIN_PATH', 	plugin_dir_path(__FILE__) );

 
//--
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//--------------------------------------------------------------------------------------------------------------------------
// CoinLore Coin Data: 
// https://www.coinlore.com/es/crypto-widgets

// [coinlore-data fiat="usd" crypto="bitcoin"]

//--------------------------------------------------------------------------------------------------------------------------

	add_shortcode('coinlore-data','crwd_coinlore_data');
	
	function crwd_coinlore_data($att, $content = null) {
	extract(shortcode_atts(array(
			'fiat'			=> 'usd',
			'crypto'		=> 'bitcoin',
			'marketcap'		=> '1',
			'volumen'		=> '1',
			'ranking'		=> '0',
			'var7d'			=> '1',
		), $att));
		
		$rendered = '
		<!-- CoinLore Widget BEGIN -->
		<script type="text/javascript" src="https://widget.coinlore.com/widgets/new-widget.js"></script><style>#coinlore-coin-data a {display: none;}</style><div id="coinlore-coin-data" class="coinlore-coin-widget" data-mcap="' . $marketcap . '" data-mcurrency="' . $fiat . '" data-d7="' . $var7d . '" data-cwidth="100%" data-rank="' . $ranking . '" data-vol="' . $volumen . '" data-id="' . $crypto . '" data-bcolor="#fff" data-tcolor="#333" data-ccolor="#333" data-pcolor="#333"></div>
		<!-- CoinLore Widget END -->
		';
		
		return $rendered; 
	}	

//--------------------------------------------------------------------------------------------------------------------------
// Coin360 Heat Map: 
// https://coin360.com/coin/bitcoin-btc

// [coin360-heatmap height="600"]

//--------------------------------------------------------------------------------------------------------------------------

	add_shortcode('coin360-heatmap','crwd_coin360_chart');
	
	function crwd_coin360_chart($att, $content = null) {
	extract(shortcode_atts(array(
			'height'			=> '600',
		), $att));
		
		$rendered = '
		<!-- Coin360 Widget BEGIN -->
		<div id="crypto-market-heatmap"><iframe src="https://coin360.com/widget/map.html" frameborder="0" title="Coin360.com: Cryptocurrency Market State" width="100%" height="' . $height . '"></iframe></div>
		<!-- Coin360 Widget END -->
		';
		
		return $rendered; 
	}	



