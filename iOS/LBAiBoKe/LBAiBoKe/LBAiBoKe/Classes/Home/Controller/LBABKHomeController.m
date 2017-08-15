//
//  LBABKHomeController.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKHomeController.h"
#import "LBABKHomeTopView.h"
#import "LBABKAdView.h"
#import "LBABKCenterView.h"
#import "LBABKFeatureView.h"
@interface LBABKHomeController ()<UIScrollViewDelegate>
// 设置上部视图
@property (nonatomic, strong) LBABKHomeTopView *topView;
///最底层滑动视图
@property (strong, nonatomic) UIScrollView *downScrollView;
///轮播图
@property (strong, nonatomic) SDCycleScrollView *topScrollView;
///轮播图
@property (strong, nonatomic) SDCycleScrollView *topScrollView1;
/// 广告上下滚动
@property (strong, nonatomic) LBABKAdView *adView;
/// 中间分类模块
@property (strong, nonatomic) LBABKCenterView *centerView;
/// 有特色模块
@property (strong, nonatomic) LBABKFeatureView *featureView;
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
    _topScrollView.pageControlAliment = SDCycleScrollViewPageContolAlimentCenter;
    _topScrollView.pageControlDotSize = CGSizeMake(10, 5);
    _topScrollView.currentPageDotColor = [UIColor whiteColor];
    NSArray *imageUrlArray = @[@"德国11",@"九月活动"];
    _topScrollView.imageURLStringsGroup = imageUrlArray;
    
    // 添加广告
    _adView = [[LBABKAdView alloc]initWithFrame:CGRectMake(0, 132, [UIScreen cz_screenWidth], 50)];
    _adView.backgroundColor = [UIColor redColor];
    [self.downScrollView addSubview:_adView];

    ///轮播图
    _topScrollView1 = [SDCycleScrollView cycleScrollViewWithFrame:CGRectMake(0, 190, [UIScreen cz_screenWidth], 80) delegate:nil placeholderImage:[UIImage imageNamed:@"图标1"]];
    _topScrollView1.pageControlAliment = SDCycleScrollViewPageContolAlimentCenter;
    _topScrollView1.pageControlDotSize = CGSizeMake(10, 5);
    _topScrollView1.currentPageDotColor = [UIColor whiteColor];
    NSArray *imageUrlArray1 = @[@"德国11",@"九月活动"];
    _topScrollView1.imageURLStringsGroup = imageUrlArray1;
    
    /// 中间分类
    _centerView = [[LBABKCenterView alloc]initWithFrame:CGRectMake(0, 280, [UIScreen cz_screenWidth], 120)];
    _centerView.backgroundColor = [UIColor redColor];
    [self.downScrollView addSubview:_centerView];
    
    // 有特色
    _featureView = [[LBABKFeatureView alloc]initWithFrame:CGRectMake(0, 410, [UIScreen cz_screenWidth], 40)];
    _featureView.backgroundColor = [UIColor redColor];
    [self.downScrollView addSubview:_featureView];
    
    
    
    
    
    
    
    [self.view addSubview:self.downScrollView];
    [self.downScrollView addSubview:self.topScrollView];
    [self.downScrollView addSubview:self.topScrollView1];

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
