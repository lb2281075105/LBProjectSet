//
//  LBABKHomeController.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKHomeController.h"
#import "LBABKHomeTopView.h"

@interface LBABKHomeController ()<UIScrollViewDelegate>
// 设置上部视图
@property (nonatomic, strong) LBABKHomeTopView *topView;
///最底层滑动视图
@property (strong, nonatomic) UIScrollView *downScrollView;
///轮播图
@property (strong, nonatomic) SDCycleScrollView *topScrollView;
@end

@implementation LBABKHomeController

- (void)viewDidLoad {
    [super viewDidLoad];
    // 设置上部视图
    [self setUpTopView];
    [self addSubViews];
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
- (void)addSubViews{
    ///最底层滑动视图
    _downScrollView = [[UIScrollView alloc]initWithFrame:CGRectMake(0, 82, [UIScreen cz_screenWidth], [UIScreen cz_screenHeight] - 82 - 49)];
    _downScrollView.contentSize = CGSizeMake(0, 1980);
    _downScrollView.delegate = self;
    
    ///轮播图
    _topScrollView = [SDCycleScrollView cycleScrollViewWithFrame:CGRectMake(0, 0, [UIScreen cz_screenWidth], 130) delegate:nil placeholderImage:[UIImage imageNamed:@"图标1"]];
    _topScrollView.backgroundColor = [UIColor orangeColor];
    _topScrollView.pageControlAliment = SDCycleScrollViewPageContolAlimentCenter;
    _topScrollView.currentPageDotColor = [UIColor whiteColor];
    NSArray *imageUrlArray = @[@"德国11",@"九月活动"];
    _topScrollView.imageURLStringsGroup = imageUrlArray;
    
    
    [self.view addSubview:self.downScrollView];
    [self.downScrollView addSubview:self.topScrollView];

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
