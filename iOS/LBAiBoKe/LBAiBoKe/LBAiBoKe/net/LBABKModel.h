//
//  LBABKModel.h
//  LBAiBoKe
//
//  Created by liubo on 2017/8/16.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface LBABKModel : NSObject
/**
 id = 2;
	thumb = ;
	displayorder = 0;
	is_display = 0;
	createtime = 0;
	author = ;
	click = 0;
	cateid = 0;
	title = 爱情的一把火;
	source = ;
	is_show_home = 0;
	content = 有一个人叫真咯嗦，娶了个老婆叫要你管，生了个儿子叫麻烦。有一天麻烦不见了！夫妻俩就去报案。警察问爸爸：请问这位男士你叫啥名字？爸爸说:真咯嗦。警察很生气，然后 他又问妈妈叫啥名字。妈妈说:要你管。警察非常生气的说:你们要干什么?夫妻俩说：找麻烦。;

 
 */

/// 标题
@property (nonatomic, strong) NSString *title;
/// 内容
@property (nonatomic, strong) NSString *content;
/// 图片
@property (nonatomic, strong) NSString *thumb;
@end
