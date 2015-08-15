<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Emoji表情大暴走</title>
	<link rel="icon" href="/emoji/Public/img/icon64.ico" />
	<meta name="description" content="地球人已经无法阻止emoji表情啦">
	<meta name="author" content="chendind@leovito.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/emoji/Public/css/flaticon/flaticon.css"> 
    <link rel="stylesheet" type="text/css" href="/emoji/Public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/emoji/Public/css/public.css">
    <script src="/emoji/Public/js/jquery-1.7.2.min.js"></script>
</head>
<body>
	<div style="display:none">
		<img src="/emoji/Public/img/icon300.png" alt="" />
	</div>
	<div class="savebtn" id="savebtn">
		<i class="flaticon-download164"></i>合成图片
	</div>
	<div class="limitedbox">
		<div class="canvasbox">
			<canvas id="canvas" width="320" height="217.6"></canvas>
		</div>
		<div class="uploadbox" id="uploadbox">
			<div class="addicon veryCenter">
				<i class="flaticon-add182"></i>添加一张照片
			</div>
		</div>
		<input id="photofile" type="file" />
	</div>
	<div class="beyond" id="beyond">
		<div class="emojibox" id="emojibox" data-showid="emotion">
			<div class="scrollbox" id="emotion">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
					</table>
					<table data-index="2" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
					</table>
					<table data-index="3" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
					</table>
					<table data-index="4" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/emotion/198.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
					<a></a>
					<a></a>
					<a></a>
				</div>
			</div>
			<div class="scrollbox" id="human">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
					</table>
					<table data-index="2" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
					</table>
					<table data-index="3" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/human/286.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
					<a></a>
					<a></a>
				</div>
			</div>
			<div class="scrollbox" id="animal">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/animal/360.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
				</div>
			</div>
			<div class="scrollbox" id="garment">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/garment/281.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
				</div>
			</div>
			<div class="scrollbox" id="food">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/food/229.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
				</div>
			</div>
			<div class="scrollbox" id="other">
				<div class="longbox" data-page="1">
					<table data-index="1" class="emojitable" id="emojitable">
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
						</tr>
						<tr>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
							<td>
								<img src="/emoji/Public/emoji/emoji64/other/1.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="pagenav">
					<a class="now"></a>
				</div>
			</div>
			<div class="section">
				<div class="now" data-tab="emotion">表情</div>
				<div data-tab="human">人类</div>
				<div data-tab="animal">动物</div>
				<div data-tab="garment">装备</div>
				<div data-tab="food">食物</div>
				<div data-tab="other">其他</div>
			</div>
		</div>
		<div class="ctrlbox">
			<table>
				<tr>
					<td class="title">缩放</td>
					<td class="bar"> 
						<input type="range" id="sizerange" class="range" value="1" max="2" min="0" step="0.01" ng-model="size" />
						<input type="text" value="1" disabled />
					</td>
				</tr>
				<tr>
					<td class="title">
						旋转
					</td>
					<td class="bar">
						<input type="range" id="rotaterange" class="range" value="0" max="180" min="-180" step="1" ng-model="rotate" />
						<input type="text" value="0" disabled />
					</td>
				</tr>
			</table>
			<div class="btngroup">
				<div class="btn" id="confirmbtn">
					<span>确定</span>
				</div>
				<div class="btn" id="resetbtn" style="margin-top:15px;">
					<span>重置</span>
				</div>
			</div>
		</div>
		<div class="removebox">
			<i class="flaticon-rubbish7"></i>
		</div>
	</div>
<script src="/emoji/Public/js/public.js"></script>
<!-- <script src="/emoji/Public/js/hidpi-canvas.js"></script> -->
<script>
var canvas = document.getElementById("canvas"),
	context = canvas.getContext('2d');
	ratio = getPixelRatio(context);

	$("#savebtn").bind("click",function(){
		context.drawImage($(".limitedbox img")[0],0,0);
		$(".limitedbox img").hide();
		$.each($(".emoji"),function(){
			
		})
	})
function getPixelRatio(context){
    var backingStore = context.backingStorePixelRatio ||
          context.webkitBackingStorePixelRatio ||
          context.mozBackingStorePixelRatio ||
          context.msBackingStorePixelRatio ||
          context.oBackingStorePixelRatio ||
          context.backingStorePixelRatio || 1;
    return (window.devicePixelRatio || 1) / backingStore;
};
</script>
</body>
</html>