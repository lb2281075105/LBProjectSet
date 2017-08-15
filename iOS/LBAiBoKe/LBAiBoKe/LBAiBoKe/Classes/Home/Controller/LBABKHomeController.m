//
//  LBABKHomeController.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKHomeController.h"
#import "LBABKHomeTopView.h"
@interface LBABKHomeController ()
// 设置上部视图
@property (nonatomic, strong) LBABKHomeTopView *topView;
@end

@implementation LBABKHomeController

- (void)viewDidLoad {
    [super viewDidLoad];
    // 设置上部视图
    [self setUpTopView];
    
}
// 设置上部视图
- (void)setUpTopView{
   
    _topView = [[LBABKHomeTopView alloc]init];
    _topView.backgroundColor = [UIColor orangeColor];
    [self.view addSubview:_topView];
    [_topView mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.right.top.equalTo(@0);
        make.height.equalTo(@80);
    }];
    
}

- (void)viewWillAppear:(BOOL)animated{
    [super viewWillAppear:animated];
    self.navigationController.navigationBarHidden = YES;
}
- (void)viewWillDisappear:(BOOL)animated{
    [super viewWillDisappear:animated];
    self.navigationController.navigationBarHidden = NO;
}

@end
