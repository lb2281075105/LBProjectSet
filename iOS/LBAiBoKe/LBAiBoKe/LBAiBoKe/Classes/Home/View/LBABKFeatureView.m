//
//  LBABKFeatureView.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKFeatureView.h"

@implementation LBABKFeatureView

- (instancetype)initWithFrame:(CGRect)frame
{
    self = [super initWithFrame:frame];
    if (self) {
        
        [self setUpSubViews];
    }
    return self;
}

// 设置字样
- (void)setUpSubViews{

    UIView *indicatorView = [[UIView alloc]init];
    indicatorView.backgroundColor = [UIColor greenColor];
    [self addSubview:indicatorView];
    [indicatorView mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@15);
        make.width.equalTo(@3);
        make.centerY.equalTo(self.mas_centerY);
        make.height.equalTo(@20);
    }];

    UILabel *label = [[UILabel alloc]init];
    label.text = @"有特色";
    label.font = [UIFont systemFontOfSize:15];
    [self addSubview:label];
    [label mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(indicatorView.mas_right).offset(10);
        make.top.equalTo(@0);
        make.right.equalTo(self.mas_right).offset(-15);
        make.bottom.equalTo(@0);
    }];
}
@end
