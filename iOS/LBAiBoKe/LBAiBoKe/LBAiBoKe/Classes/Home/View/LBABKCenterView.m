//
//  LBABKCenterView.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKCenterView.h"

@implementation LBABKCenterView

- (instancetype)initWithFrame:(CGRect)frame
{
    self = [super initWithFrame:frame];
    if (self) {
        /// 添加子视图
        [self setUpCenterSubViews];
    }
    return self;
}
- (void)setUpCenterSubViews{

    for (int i = 0; i < 3; i++) {
        UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
        button.frame = CGRectMake(i * [UIScreen cz_screenWidth] / 3.0, 0, [UIScreen cz_screenWidth], 120);
        button.tag = 200 + i;
        [button addTarget:self action:@selector(buttonClick:) forControlEvents:UIControlEventTouchUpInside];
        // 添加图片
        UIImageView *imageView = [[UIImageView alloc]init];
        imageView.backgroundColor = [UIColor greenColor];
        [button addSubview:imageView];
        [imageView mas_makeConstraints:^(MASConstraintMaker *make) {
            make.width.height.equalTo(@50);
            make.top.equalTo(@15);
            make.centerX.equalTo(button.mas_centerX);
        }];
        
        // 添加文字标题1
        UILabel *label1 = [[UILabel alloc]init];
        label1.text = @"label1";
        label1.font = [UIFont systemFontOfSize:16];
        [button addSubview:label1];
        label1.textAlignment = NSTextAlignmentCenter;
        [label1 mas_makeConstraints:^(MASConstraintMaker *make) {
            make.left.right.equalTo(@0);
            make.top.equalTo(imageView.mas_bottom).offset(5);
            make.centerX.equalTo(button.mas_centerX);
        }];
        // 添加文字标题2
        UILabel *label2 = [[UILabel alloc]init];
        label2.text = @"label2";
        label2.font = [UIFont systemFontOfSize:15];
        label2.textAlignment = NSTextAlignmentCenter;
        [button addSubview:label2];
        [label2 mas_makeConstraints:^(MASConstraintMaker *make) {
            make.left.right.equalTo(@0);
            make.top.equalTo(label1.mas_bottom).offset(5);
            make.centerX.equalTo(button.mas_centerX);
        }];

        
        [self addSubview:button];
    }

}

- (void)buttonClick:(UIButton *)button{

    NSLog(@"%li",button.tag);

}

@end