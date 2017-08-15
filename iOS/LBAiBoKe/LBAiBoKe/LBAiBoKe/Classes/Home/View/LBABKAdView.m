//
//  LBABKAdView.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKAdView.h"

@implementation LBABKAdView{

    UIView *_adView;
    UIImageView *_imageView;
    UILabel *_adLabel1;
    UILabel *_adLabel2;
    UILabel *_circle1;
    UILabel *_circle2;
}

- (instancetype)initWithFrame:(CGRect)frame
{
    self = [super initWithFrame:frame];
    if (self) {
        [self setUpAdView];
    }
    return self;
}
// 设置广告
- (void)setUpAdView{
    
    _imageView = [[UIImageView alloc]init];
    _imageView.image = [UIImage imageNamed:@"Image-1"];
    [self addSubview:_imageView];
    [_imageView mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@15);
        make.centerY.equalTo(self.mas_centerY);
        make.width.height.equalTo(@40);
    }];
    
    // 广告1
    _adLabel1 = [[UILabel alloc]init];
    _adLabel1.text = @"广告1广告1广告1广告1广告1广告1";
    _adLabel1.font = [UIFont systemFontOfSize:15];
    [self addSubview:_adLabel1];
    [_adLabel1 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(_imageView.mas_right).offset(15);
        make.top.equalTo(_imageView.mas_top);
        make.height.equalTo(@20);
        make.right.equalTo(self.mas_right).offset(-15);
    }];
    // 广告2
    _adLabel2 = [[UILabel alloc]init];
    _adLabel2.font = [UIFont systemFontOfSize:15];
    _adLabel2.text = @"广告2广告2广告2广告2广告2广告2";
    [self addSubview:_adLabel2];
    [_adLabel2 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(_imageView.mas_right).offset(15);
        make.top.equalTo(_adLabel1.mas_bottom);
        make.height.equalTo(@20);
        make.right.equalTo(self.mas_right).offset(-15);
    }];
    // 设置圆点
    _circle1 = [[UILabel alloc]init];
    _circle1.backgroundColor = [UIColor blackColor];
    _circle1.layer.cornerRadius = 2.5;
    _circle1.layer.masksToBounds = YES;
    [self addSubview:_circle1];
    [_circle1 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.right.equalTo(_adLabel1.mas_left).offset(-5);
        make.centerY.equalTo(_adLabel1.mas_centerY);
        make.height.width.equalTo(@5);
    }];
    // 设置圆点
    _circle2 = [[UILabel alloc]init];
    _circle2.backgroundColor = [UIColor blackColor];
    _circle2.layer.cornerRadius = 2.5;
    _circle2.layer.masksToBounds = YES;
    [self addSubview:_circle2];
    [_circle2 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.right.equalTo(_adLabel2.mas_left).offset(-5);
        make.centerY.equalTo(_adLabel2.mas_centerY);
        make.height.width.equalTo(@5);
    }];
}
@end
