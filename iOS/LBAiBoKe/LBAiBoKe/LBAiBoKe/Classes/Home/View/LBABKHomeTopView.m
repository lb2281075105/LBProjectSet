//
//  LBABKHomeTopView.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKHomeTopView.h"
#import "MJExtension.h"
@implementation LBABKHomeTopView{

    NSArray *_array;
    NSMutableArray *_arrayButton;
    UIView *_indicatorView;
}

- (instancetype)init
{
    self = [super init];
    if (self) {
        _arrayButton = [[NSMutableArray alloc]init];
        _indicatorView = [[UIView alloc]init];
        _indicatorView.backgroundColor = [UIColor redColor];
        [self addSubview:_indicatorView];
        // 设置布局
        [self setUpAutoLayout];
        
    }
    return self;
}

- (void)setUpAutoLayout{

    // 设置 \送至\ 按钮
    UILabel *songDaoLabel = [[UILabel alloc]init];
    songDaoLabel.font = [UIFont systemFontOfSize:14];
    songDaoLabel.text = @"送至：";
    [self addSubview:songDaoLabel];
    [songDaoLabel mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@15);
        make.top.equalTo(@30);
        make.height.equalTo(@20);
    }];
    // 设置 \地址选择\ 按钮
    UIButton *addressButton = [UIButton buttonWithType:UIButtonTypeCustom];
    [addressButton setTitle:@"北京大学" forState:UIControlStateNormal];
    addressButton.titleLabel.font = [UIFont systemFontOfSize:14];
    [addressButton addTarget:self action:@selector(addressClick) forControlEvents:UIControlEventTouchUpInside];
    [self addSubview:addressButton];
    [addressButton mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(songDaoLabel.mas_right);
        make.top.equalTo(songDaoLabel.mas_top);
        make.height.equalTo(@20);
    }];
    // 设置 \右边\ 按钮1
    UIButton *rightButton1 = [UIButton buttonWithType:UIButtonTypeCustom];
    [rightButton1 setTitle:@"警告" forState:UIControlStateNormal];
    rightButton1.titleLabel.font = [UIFont systemFontOfSize:14];
    [rightButton1 addTarget:self action:@selector(right1Click) forControlEvents:UIControlEventTouchUpInside];
    [self addSubview:rightButton1];
    [rightButton1 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.right.equalTo(self).offset(-15);
        make.top.equalTo(songDaoLabel.mas_top);
        make.height.equalTo(@20);
    }];

    // 设置 \右边\ 按钮2
    UIButton *rightButton2 = [UIButton buttonWithType:UIButtonTypeCustom];
    [rightButton2 setTitle:@"按妞1" forState:UIControlStateNormal];
    rightButton2.titleLabel.font = [UIFont systemFontOfSize:14];
    [rightButton2 addTarget:self action:@selector(right2Click) forControlEvents:UIControlEventTouchUpInside];
    [self addSubview:rightButton2];
    [rightButton2 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.right.equalTo(rightButton1.mas_left).offset(-6);
        make.top.equalTo(songDaoLabel.mas_top);
        make.height.equalTo(@20);
    }];
    // 设置 \周末大放价\ 😄
    UILabel *sundayLabel = [[UILabel alloc]init];
    sundayLabel.font = [UIFont systemFontOfSize:12];
    sundayLabel.text = @"周末大放价";
    [self addSubview:sundayLabel];
    [sundayLabel mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@18);
        make.top.equalTo(songDaoLabel.mas_bottom).offset(5);
        make.height.equalTo(@20);
    }];
    // 设置 \点击展开\ 按钮
    UIButton *rightButton3 = [UIButton buttonWithType:UIButtonTypeCustom];
    [rightButton3 setTitle:@"展开" forState:UIControlStateNormal];
    rightButton3.titleLabel.font = [UIFont systemFontOfSize:14];
    [rightButton3 addTarget:self action:@selector(right3Click) forControlEvents:UIControlEventTouchUpInside];
    [self addSubview:rightButton3];
    [rightButton3 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.right.equalTo(self).offset(-8);
        make.centerY.equalTo(sundayLabel.mas_centerY);
        make.height.equalTo(@20);
    }];
    
    _array = @[@"多点超市",@"全球精选"];
    for (int i = 0; i < 2; i++) {
        UIButton *centerButton = [UIButton buttonWithType:UIButtonTypeCustom];
        centerButton.tag = 100 + i;
        centerButton.titleLabel.font = [UIFont systemFontOfSize:15];
        [centerButton setTitle:_array[i] forState:UIControlStateNormal];
        [centerButton setTitleColor:[UIColor redColor] forState:UIControlStateSelected];
        [centerButton setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
        [centerButton addTarget:self action:@selector(centerButtonClick:) forControlEvents:UIControlEventTouchUpInside];
        [self addSubview:centerButton];
        [_arrayButton addObject:centerButton];
        _indicatorView.y = 78;
        
        [centerButton mas_makeConstraints:^(MASConstraintMaker *make) {
            if (i == 0) {
                make.left.equalTo(sundayLabel.mas_right).offset((i+1) * 30);
            }else{
                make.left.equalTo(sundayLabel.mas_right).offset(120);
            }
            make.centerY.equalTo(sundayLabel.mas_centerY);
            make.height.equalTo(@30);
        }];
        
        if (centerButton.tag == 100) {
            centerButton.userInteractionEnabled = false;
            centerButton.selected = true;
//            [_indicatorView mas_makeConstraints:^(MASConstraintMaker *make) {
//                make.width.equalTo(centerButton.mas_width);
//                make.height.equalTo(@2);
//                make.top.equalTo(centerButton.mas_bottom).offset(-2);
//                make.centerX.equalTo(centerButton.mas_centerX);
//            }];
            
            UIButton *button = _arrayButton[0];
            _indicatorView.width = 70;
            _indicatorView.height = 2;
            _indicatorView.centerX = button.centerX;
            _indicatorView.hidden = NO;
            LBABKLog(@"%f,%f",_indicatorView.frame.origin.y,_indicatorView.frame.size.width);
        }
    }
    
}
- (void)addressClick{
    
    LBABKLog(@"地址选择");
}
- (void)right1Click{
    
    LBABKLog(@"点击了右1");
}
- (void)right2Click{
    
    LBABKLog(@"点击了右2");
}
- (void)right3Click{
    
    LBABKLog(@"展开");
}
- (void)centerButtonClick:(UIButton *)button{

    for (UIButton *btn in _arrayButton) {
        btn.selected = false;
        btn.userInteractionEnabled = true;
        _indicatorView.hidden = YES;
    }
    
    UIButton *centerBtn = _arrayButton[button.tag - 100];
    centerBtn.selected = true;
    centerBtn.userInteractionEnabled = false;
    _indicatorView.hidden = NO;
    // 动画
    [UIView animateWithDuration:0.25 animations:^{
        _indicatorView.centerX = centerBtn.centerX;
//        [_indicatorView mas_updateConstraints:^(MASConstraintMaker *make) {
//            make.width.equalTo(centerBtn.mas_width);
//            make.height.equalTo(@2);
//            make.top.equalTo(centerBtn.mas_bottom).offset(-2);
//            make.centerX.equalTo(centerBtn.mas_centerX);
//        }];
        
    }];
    
}

@end
